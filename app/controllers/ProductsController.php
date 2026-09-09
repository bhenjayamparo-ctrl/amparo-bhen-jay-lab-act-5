<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ProductsController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->call->model('ProductsModel');
        $this->call->library('session');
        $this->call->database();
    }

    public function before_action()
    {
        $this->call->library('session');

        if ($this->session->userdata('authenticated') !== true) {
            redirect('login');
        }
    }

    public function index()
    {
        $products = $this->ProductsModel
            ->query()
            ->order_by('created_at', 'DESC')
            ->get_all();

        $this->call->view('products/index', [
            'page_title' => 'Products',
            'products' => $products,
            'username' => $this->session->userdata('username'),
            'flash' => $this->session->flashdata('success'),
        ]);
    }

    public function create()
    {
        $this->render_form('Add product', 'products/create', [
            'product' => [
                'product_name' => '',
                'description' => '',
                'price' => '',
                'quantity' => '',
            ],
            'errors' => [],
        ]);
    }

    public function store()
    {
        $data = $this->product_input();
        $errors = $this->validate_product($data);

        if (!empty($errors)) {
            $this->render_form('Add product', 'products/create', [
                'product' => $data,
                'errors' => $errors,
            ]);
            return;
        }

        $this->ProductsModel->insert($data);
        $this->session->set_flashdata('success', 'Product added successfully.');
        redirect('products');
    }

    public function edit($id)
    {
        $product = $this->ProductsModel->find((int) $id);
        if (!is_array($product)) {
            show_404('Product not found', 'The requested product does not exist.');
        }

        $this->render_form('Edit product', 'products/edit', [
            'product' => $product,
            'errors' => [],
        ]);
    }

    public function update($id)
    {
        $product_id = (int) $id;
        $data = $this->product_input();
        $errors = $this->validate_product($data);

        if (!empty($errors)) {
            $data['id'] = $product_id;
            $this->render_form('Edit product', 'products/edit', [
                'product' => $data,
                'errors' => $errors,
            ]);
            return;
        }

        $this->ProductsModel->update($product_id, $data);
        $this->session->set_flashdata('success', 'Product updated successfully.');
        redirect('products');
    }

    public function delete($id)
    {
        $product_id = (int) $id;
        if ($product_id < 1) {
            show_404('Product not found', 'The requested product does not exist.');
        }

        $this->ProductsModel->delete($product_id);
        $this->session->set_flashdata('success', 'Product deleted successfully.');
        redirect('products');
    }

    private function render_form(string $heading, string $view, array $data)
    {
        $data['page_title'] = $heading;
        $data['username'] = $this->session->userdata('username');
        $this->call->view($view, $data);
    }

    private function product_input(): array
    {
        return [
            'product_name' => trim((string) $this->call->request->post('product_name', '')),
            'description' => trim((string) $this->call->request->post('description', '')),
            'price' => trim((string) $this->call->request->post('price', '')),
            'quantity' => trim((string) $this->call->request->post('quantity', '')),
        ];
    }

    private function validate_product(array $data): array
    {
        $errors = [];

        if ($data['product_name'] === '' || strlen($data['product_name']) > 100) {
            $errors['product_name'] = 'Product name is required and must be 100 characters or less.';
        }
        if ($data['description'] === '') {
            $errors['description'] = 'Add a short description for this product.';
        }
        if (!is_numeric($data['price']) || (float) $data['price'] < 0) {
            $errors['price'] = 'Enter a valid non-negative price.';
        }
        if (filter_var($data['quantity'], FILTER_VALIDATE_INT) === false || (int) $data['quantity'] < 0) {
            $errors['quantity'] = 'Enter a valid non-negative whole number.';
        }

        return $errors;
    }
}
