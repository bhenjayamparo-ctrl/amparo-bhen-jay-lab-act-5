<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
$page_title = $page_title ?? 'LavaLust';
$username = $username ?? null;
$flash = $flash ?? null;
// View-only helper: which nav item is highlighted (uses the title the controller already passes).
$nav_active = ($page_title === 'Add product') ? 'create' : 'products';
$__nonce = defined('CSP_NONCE') ? ' nonce="' . CSP_NONCE . '"' : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="color-scheme" content="light dark">
    <meta name="theme-color" content="#f5f5f7" media="(prefers-color-scheme: light)">
    <meta name="theme-color" content="#050508" media="(prefers-color-scheme: dark)">
    <title><?= htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8') ?> · Bhen Jay</title>
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDI0IDEwMjQiIHdpZHRoPSIxMDI0IiBoZWlnaHQ9IjEwMjQiIHJvbGU9ImltZyIgYXJpYS1sYWJlbD0iQmhlbiBKYXkiPgogIDxkZWZzPgogICAgPGxpbmVhckdyYWRpZW50IGlkPSJiai1iZyIgeDE9IjE0MCIgeTE9IjAiIHgyPSI4ODAiIHkyPSIxMDI0IiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+CiAgICAgIDxzdG9wIG9mZnNldD0iMCIgc3RvcC1jb2xvcj0iI0ZGQjQ0MyIvPgogICAgICA8c3RvcCBvZmZzZXQ9Ii40OCIgc3RvcC1jb2xvcj0iI0ZGNkIxRiIvPgogICAgICA8c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9IiNGMDI1NEYiLz4KICAgIDwvbGluZWFyR3JhZGllbnQ+CiAgICA8cmFkaWFsR3JhZGllbnQgaWQ9ImJqLWxvdyIgY3g9IjYwJSIgY3k9IjExMiUiIHI9IjcwJSI+CiAgICAgIDxzdG9wIG9mZnNldD0iMCIgc3RvcC1jb2xvcj0iI0ZGMkQ2RiIgc3RvcC1vcGFjaXR5PSIuNTUiLz4KICAgICAgPHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjRkYyRDZGIiBzdG9wLW9wYWNpdHk9IjAiLz4KICAgIDwvcmFkaWFsR3JhZGllbnQ+CiAgICA8cmFkaWFsR3JhZGllbnQgaWQ9ImJqLWdsb3ciIGN4PSIzMCUiIGN5PSI4JSIgcj0iNzUlIj4KICAgICAgPHN0b3Agb2Zmc2V0PSIwIiBzdG9wLWNvbG9yPSIjZmZmIiBzdG9wLW9wYWNpdHk9Ii41NSIvPgogICAgICA8c3RvcCBvZmZzZXQ9Ii41NSIgc3RvcC1jb2xvcj0iI2ZmZiIgc3RvcC1vcGFjaXR5PSIwIi8+CiAgICA8L3JhZGlhbEdyYWRpZW50PgogICAgPGxpbmVhckdyYWRpZW50IGlkPSJiai1yaW0iIHgxPSIwIiB5MT0iMCIgeDI9IjAiIHkyPSIxIj4KICAgICAgPHN0b3Agb2Zmc2V0PSIwIiBzdG9wLWNvbG9yPSIjZmZmIiBzdG9wLW9wYWNpdHk9Ii43NSIvPgogICAgICA8c3RvcCBvZmZzZXQ9Ii4zNSIgc3RvcC1jb2xvcj0iI2ZmZiIgc3RvcC1vcGFjaXR5PSIuMDUiLz4KICAgICAgPHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjZmZmIiBzdG9wLW9wYWNpdHk9Ii4yMiIvPgogICAgPC9saW5lYXJHcmFkaWVudD4KICAgIDxsaW5lYXJHcmFkaWVudCBpZD0iYmotZ2x5cGgiIHgxPSIwIiB5MT0iMjU2IiB4Mj0iMCIgeTI9Ijc5MCIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiPgogICAgICA8c3RvcCBvZmZzZXQ9IjAiIHN0b3AtY29sb3I9IiNmZmYiLz4KICAgICAgPHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjRkZFOURBIi8+CiAgICA8L2xpbmVhckdyYWRpZW50PgogICAgPGZpbHRlciBpZD0iYmotc2hhZG93IiB4PSItMjAlIiB5PSItMjAlIiB3aWR0aD0iMTQwJSIgaGVpZ2h0PSIxNTAlIj4KICAgICAgPGZlRHJvcFNoYWRvdyBkeD0iMCIgZHk9IjE0IiBzdGREZXZpYXRpb249IjE2IiBmbG9vZC1jb2xvcj0iIzhBMTAzMCIgZmxvb2Qtb3BhY2l0eT0iLjM4Ii8+CiAgICA8L2ZpbHRlcj4KICAgIDxjbGlwUGF0aCBpZD0iYmotY2xpcCI+PHBhdGggZD0iTTEwMjQgNTEyIEwxMDIzIDcwNSBMMTAyMSA3NjYgTDEwMTcgODEwIEwxMDExIDg0NSBMMTAwNCA4NzUgTDk5NSA5MDAgTDk4NSA5MjIgTDk3MiA5NDEgTDk1OCA5NTggTDk0MSA5NzIgTDkyMiA5ODUgTDkwMCA5OTUgTDg3NSAxMDA0IEw4NDUgMTAxMSBMODEwIDEwMTcgTDc2NiAxMDIxIEw3MDUgMTAyMyBMNTEyIDEwMjQgTDMxOSAxMDIzIEwyNTggMTAyMSBMMjE0IDEwMTcgTDE3OSAxMDExIEwxNDkgMTAwNCBMMTI0IDk5NSBMMTAyIDk4NSBMODMgOTcyIEw2NiA5NTggTDUyIDk0MSBMMzkgOTIyIEwyOSA5MDAgTDIwIDg3NSBMMTMgODQ1IEw3IDgxMCBMMyA3NjYgTDEgNzA1IEwwIDUxMiBMMSAzMTkgTDMgMjU4IEw3IDIxNCBMMTMgMTc5IEwyMCAxNDkgTDI5IDEyNCBMMzkgMTAyIEw1MiA4MyBMNjYgNjYgTDgzIDUyIEwxMDIgMzkgTDEyNCAyOSBMMTQ5IDIwIEwxNzkgMTMgTDIxNCA3IEwyNTggMyBMMzE5IDEgTDUxMiAwIEw3MDUgMSBMNzY2IDMgTDgxMCA3IEw4NDUgMTMgTDg3NSAyMCBMOTAwIDI5IEw5MjIgMzkgTDk0MSA1MiBMOTU4IDY2IEw5NzIgODMgTDk4NSAxMDIgTDk5NSAxMjQgTDEwMDQgMTQ5IEwxMDExIDE3OSBMMTAxNyAyMTQgTDEwMjEgMjU4IEwxMDIzIDMxOVoiLz48L2NsaXBQYXRoPgogIDwvZGVmcz4KICA8cGF0aCBkPSJNMTAyNCA1MTIgTDEwMjMgNzA1IEwxMDIxIDc2NiBMMTAxNyA4MTAgTDEwMTEgODQ1IEwxMDA0IDg3NSBMOTk1IDkwMCBMOTg1IDkyMiBMOTcyIDk0MSBMOTU4IDk1OCBMOTQxIDk3MiBMOTIyIDk4NSBMOTAwIDk5NSBMODc1IDEwMDQgTDg0NSAxMDExIEw4MTAgMTAxNyBMNzY2IDEwMjEgTDcwNSAxMDIzIEw1MTIgMTAyNCBMMzE5IDEwMjMgTDI1OCAxMDIxIEwyMTQgMTAxNyBMMTc5IDEwMTEgTDE0OSAxMDA0IEwxMjQgOTk1IEwxMDIgOTg1IEw4MyA5NzIgTDY2IDk1OCBMNTIgOTQxIEwzOSA5MjIgTDI5IDkwMCBMMjAgODc1IEwxMyA4NDUgTDcgODEwIEwzIDc2NiBMMSA3MDUgTDAgNTEyIEwxIDMxOSBMMyAyNTggTDcgMjE0IEwxMyAxNzkgTDIwIDE0OSBMMjkgMTI0IEwzOSAxMDIgTDUyIDgzIEw2NiA2NiBMODMgNTIgTDEwMiAzOSBMMTI0IDI5IEwxNDkgMjAgTDE3OSAxMyBMMjE0IDcgTDI1OCAzIEwzMTkgMSBMNTEyIDAgTDcwNSAxIEw3NjYgMyBMODEwIDcgTDg0NSAxMyBMODc1IDIwIEw5MDAgMjkgTDkyMiAzOSBMOTQxIDUyIEw5NTggNjYgTDk3MiA4MyBMOTg1IDEwMiBMOTk1IDEyNCBMMTAwNCAxNDkgTDEwMTEgMTc5IEwxMDE3IDIxNCBMMTAyMSAyNTggTDEwMjMgMzE5WiIgZmlsbD0idXJsKCNiai1iZykiLz4KICA8ZyBjbGlwLXBhdGg9InVybCgjYmotY2xpcCkiPgogICAgPHJlY3Qgd2lkdGg9IjEwMjQiIGhlaWdodD0iMTAyNCIgZmlsbD0idXJsKCNiai1nbG93KSIvPgogICAgPHJlY3Qgd2lkdGg9IjEwMjQiIGhlaWdodD0iMTAyNCIgZmlsbD0idXJsKCNiai1sb3cpIi8+CiAgPC9nPgogIDxwYXRoIGQ9Ik0xMDI0IDUxMiBMMTAyMyA3MDUgTDEwMjEgNzY2IEwxMDE3IDgxMCBMMTAxMSA4NDUgTDEwMDQgODc1IEw5OTUgOTAwIEw5ODUgOTIyIEw5NzIgOTQxIEw5NTggOTU4IEw5NDEgOTcyIEw5MjIgOTg1IEw5MDAgOTk1IEw4NzUgMTAwNCBMODQ1IDEwMTEgTDgxMCAxMDE3IEw3NjYgMTAyMSBMNzA1IDEwMjMgTDUxMiAxMDI0IEwzMTkgMTAyMyBMMjU4IDEwMjEgTDIxNCAxMDE3IEwxNzkgMTAxMSBMMTQ5IDEwMDQgTDEyNCA5OTUgTDEwMiA5ODUgTDgzIDk3MiBMNjYgOTU4IEw1MiA5NDEgTDM5IDkyMiBMMjkgOTAwIEwyMCA4NzUgTDEzIDg0NSBMNyA4MTAgTDMgNzY2IEwxIDcwNSBMMCA1MTIgTDEgMzE5IEwzIDI1OCBMNyAyMTQgTDEzIDE3OSBMMjAgMTQ5IEwyOSAxMjQgTDM5IDEwMiBMNTIgODMgTDY2IDY2IEw4MyA1MiBMMTAyIDM5IEwxMjQgMjkgTDE0OSAyMCBMMTc5IDEzIEwyMTQgNyBMMjU4IDMgTDMxOSAxIEw1MTIgMCBMNzA1IDEgTDc2NiAzIEw4MTAgNyBMODQ1IDEzIEw4NzUgMjAgTDkwMCAyOSBMOTIyIDM5IEw5NDEgNTIgTDk1OCA2NiBMOTcyIDgzIEw5ODUgMTAyIEw5OTUgMTI0IEwxMDA0IDE0OSBMMTAxMSAxNzkgTDEwMTcgMjE0IEwxMDIxIDI1OCBMMTAyMyAzMTlaIiBmaWxsPSJub25lIiBzdHJva2U9InVybCgjYmotcmltKSIgc3Ryb2tlLXdpZHRoPSI2Ii8+CiAgPGcgZmlsbD0ibm9uZSIgc3Ryb2tlPSJ1cmwoI2JqLWdseXBoKSIgc3Ryb2tlLXdpZHRoPSI5MiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBmaWx0ZXI9InVybCgjYmotc2hhZG93KSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTggLTExKSI+CiAgICA8cGF0aCBkPSJNMzkyIDI1NiBWNjIyIEMzOTIgNzMwIDMzNiA3OTAgMjM2IDc5MCIgLz48cGF0aCBkPSJNMzkyIDI1NiBINTYwIEM2NTAgMjU2IDcwNiAzMDYgNzA2IDM4NCBDNzA2IDQ2MiA2NTAgNTEyIDU2MCA1MTIgSDM5MiIgLz48cGF0aCBkPSJNMzkyIDUxMiBINTg4IEM2ODggNTEyIDc1MiA1NjYgNzUyIDY1MCBDNzUyIDczNCA2ODggNzkwIDU4OCA3OTAgSDM5MiIgLz4KICA8L2c+Cjwvc3ZnPg==">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script<?= $__nonce ?>>
        (function () {
            try {
                var saved = localStorage.getItem('bj-theme');
                var theme = saved || (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
                document.documentElement.setAttribute('data-theme', theme);
            } catch (e) {}
        })();
    </script>
    <style<?= $__nonce ?>>
        /* ============================================================
           Bhen Jay design system — glass surfaces, shadcn-style tokens
           ============================================================ */
        :root{
            color-scheme:light dark;
            --radius:14px;
            --background:light-dark(#f5f5f7,#050508);
            --foreground:light-dark(#1d1d1f,#f5f5f7);
            --muted-foreground:light-dark(#66666c,#a4a4b0);
            --card:light-dark(rgba(255,255,255,.60),rgba(30,30,38,.50));
            --card-solid:light-dark(#ffffff,#26262f);
            --popover:light-dark(rgba(255,255,255,.86),rgba(34,34,44,.84));
            --border:light-dark(rgba(20,20,50,.09),rgba(255,255,255,.09));
            --input:light-dark(rgba(255,255,255,.74),rgba(255,255,255,.055));
            --input-border:light-dark(rgba(20,20,50,.15),rgba(255,255,255,.15));
            --hover:light-dark(rgba(20,20,50,.05),rgba(255,255,255,.07));
            --primary:#ee6a12;
            --primary-foreground:#ffffff;
            --ring:rgba(238,106,18,.36);
            --destructive:light-dark(#c9222c,#ff6b63);
            --destructive-soft:light-dark(rgba(201,34,44,.10),rgba(255,107,99,.14));
            --success:light-dark(#1b7f37,#4be07a);
            --success-soft:light-dark(rgba(27,127,55,.11),rgba(75,224,122,.13));
            --edge:light-dark(rgba(255,255,255,.95),rgba(255,255,255,.20));
            --edge-lo:light-dark(rgba(255,255,255,.30),rgba(255,255,255,.03));
            --spot:light-dark(rgba(255,255,255,.80),rgba(255,255,255,.075));
            --shadow:light-dark(rgba(40,40,90,.18),rgba(0,0,0,.65));
            --tile:light-dark(rgba(255,255,255,.88),rgba(255,255,255,.085));
            --blob-1:light-dark(rgba(255,158,64,.50),rgba(255,106,31,.30));
            --blob-2:light-dark(rgba(255,96,150,.34),rgba(240,37,79,.24));
            --blob-3:light-dark(rgba(110,140,255,.38),rgba(80,90,255,.26));
            --font:-apple-system,BlinkMacSystemFont,"SF Pro Display","SF Pro Text",Inter,"Segoe UI",system-ui,Roboto,sans-serif;
            --spring:cubic-bezier(.34,1.56,.64,1);
        }
        :root[data-theme="light"]{color-scheme:light}
        :root[data-theme="dark"]{color-scheme:dark}

        *{box-sizing:border-box}
        html{-webkit-text-size-adjust:100%}
        body{margin:0;min-height:100vh;min-height:100dvh;display:flex;flex-direction:column;background:var(--background);color:var(--foreground);font-family:var(--font);font-size:.9375rem;line-height:1.5;-webkit-font-smoothing:antialiased;font-feature-settings:"cv11","ss01";overflow-x:hidden}
        a{color:inherit;text-decoration:none}
        button,input,textarea{font:inherit;color:inherit}
        svg{flex:none}
        .sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0}
        :focus-visible{outline:2px solid var(--primary);outline-offset:2px}
        ::selection{background:rgba(238,106,18,.28)}

        /* ---------- Ambient background (the one signature motion) ---------- */
        .ambient{position:fixed;inset:0;z-index:-1;overflow:hidden;pointer-events:none}
        .blob{position:absolute;width:62vmax;height:62vmax;border-radius:50%;will-change:transform}
        .blob.b1{top:-24vmax;left:-14vmax;background:radial-gradient(closest-side,var(--blob-1),transparent);animation:drift-a 38s ease-in-out infinite alternate}
        .blob.b2{top:8vmax;right:-22vmax;background:radial-gradient(closest-side,var(--blob-2),transparent);animation:drift-b 46s ease-in-out infinite alternate}
        .blob.b3{bottom:-30vmax;left:14vmax;background:radial-gradient(closest-side,var(--blob-3),transparent);animation:drift-c 52s ease-in-out infinite alternate}
        @keyframes drift-a{to{transform:translate3d(14vmax,10vmax,0) scale(1.12)}}
        @keyframes drift-b{to{transform:translate3d(-16vmax,12vmax,0) scale(.92)}}
        @keyframes drift-c{to{transform:translate3d(12vmax,-9vmax,0) scale(1.08)}}

        /* ---------- Glass surface ---------- */
        .panel,.stat-card,.dock,.preview-card{position:relative;isolation:isolate;background:var(--card);-webkit-backdrop-filter:blur(28px) saturate(170%);backdrop-filter:blur(28px) saturate(170%);box-shadow:inset 0 1px 0 var(--edge),0 0 0 1px var(--border),0 34px 60px -34px var(--shadow),0 10px 24px -14px var(--shadow)}
        /* The top bar's glass lives on a pseudo-element so its fixed-position mobile tab bar can anchor to the viewport. */
        .topbar-inner{position:relative;isolation:isolate}
        .topbar-inner::after{content:"";position:absolute;inset:0;border-radius:inherit;z-index:-1;background:var(--card);-webkit-backdrop-filter:blur(28px) saturate(170%);backdrop-filter:blur(28px) saturate(170%);box-shadow:inset 0 1px 0 var(--edge),0 0 0 1px var(--border),0 34px 60px -34px var(--shadow),0 10px 24px -14px var(--shadow)}
        .panel{border-radius:26px}
        .panel::before,.stat-card::before,.topbar-inner::before,.dock::before,.preview-card::before{content:"";position:absolute;inset:0;border-radius:inherit;padding:1px;background:linear-gradient(155deg,var(--edge),var(--edge-lo) 32%,transparent 55%,var(--edge-lo));-webkit-mask:linear-gradient(#000 0 0) content-box,linear-gradient(#000 0 0);-webkit-mask-composite:xor;mask-composite:exclude;pointer-events:none;z-index:2}
        .panel::after,.stat-card::after,.preview-card::after{content:"";position:absolute;inset:0;border-radius:inherit;background:radial-gradient(360px circle at var(--mx,50%) var(--my,0%),var(--spot),transparent 62%);opacity:0;transition:opacity .35s ease;pointer-events:none;z-index:-1}
        .panel:hover::after,.stat-card:hover::after,.preview-card:hover::after{opacity:1}

        /* ---------- Layout ---------- */
        .shell{width:100%;max-width:1120px;margin:0 auto;padding:0 24px}
        main{flex:1;padding:40px 0 56px}

        /* ---------- Floating top bar ---------- */
        .topbar{position:sticky;top:0;z-index:40;padding:12px 16px 0}
        .topbar-inner{max-width:1120px;margin:0 auto;height:60px;border-radius:22px;padding:0 10px 0 14px;display:grid;grid-template-columns:1fr auto 1fr;align-items:center;gap:12px}
        .brand{display:inline-flex;align-items:center;gap:11px;font-weight:650;font-size:1.05rem;letter-spacing:-.02em;justify-self:start}
        .brand-mark{width:32px;height:32px;filter:drop-shadow(0 4px 10px rgba(240,60,40,.35))}
        .seg{display:flex;gap:2px;padding:4px;border-radius:14px;background:var(--hover)}
        .nav-link{white-space:nowrap;display:inline-flex;align-items:center;gap:7px;padding:7px 14px;border-radius:10px;font-weight:500;font-size:.875rem;color:var(--muted-foreground);transition:color .2s,background .2s,box-shadow .2s}
        .nav-link svg{width:16px;height:16px}
        .nav-link:hover{color:var(--foreground)}
        .nav-link[aria-current="page"]{color:var(--foreground);background:var(--card-solid);box-shadow:0 1px 2px var(--shadow),0 0 0 1px var(--border)}
        .tools{display:flex;align-items:center;gap:6px;justify-self:end}
        .user-chip{display:flex;align-items:center;gap:9px;padding:0 10px 0 4px;color:var(--muted-foreground);font-size:.875rem;font-weight:500}
        .avatar{display:grid;place-items:center;width:30px;height:30px;border-radius:50%;background:linear-gradient(145deg,#ffb04a,#f0254f);color:#fff;font-weight:650;font-size:.8rem;box-shadow:inset 0 1px 0 rgba(255,255,255,.4)}
        .tools form{margin:0}

        /* ---------- Buttons (shadcn-style variants) ---------- */
        .btn{position:relative;display:inline-flex;align-items:center;justify-content:center;gap:8px;height:42px;padding:0 18px;border:0;border-radius:12px;font-weight:600;font-size:.9rem;letter-spacing:-.005em;cursor:pointer;white-space:nowrap;transition:transform .18s var(--spring),filter .2s,background .2s,box-shadow .2s}
        .btn svg{width:16px;height:16px}
        .btn:active{transform:scale(.96)}
        .btn-primary{color:var(--primary-foreground);background:linear-gradient(180deg,#f67a20,#d94a08);box-shadow:inset 0 1px 0 rgba(255,255,255,.38),0 0 0 1px rgba(170,50,0,.5),0 10px 22px -8px rgba(226,84,10,.65)}
        .btn-primary:hover{filter:brightness(1.07) saturate(1.05)}
        .btn-secondary{background:var(--input);color:var(--foreground);box-shadow:inset 0 1px 0 var(--edge),0 0 0 1px var(--input-border),0 1px 2px var(--shadow)}
        .btn-secondary:hover{background:var(--card-solid)}
        .btn-ghost{background:transparent;color:var(--muted-foreground)}
        .btn-ghost:hover{background:var(--hover);color:var(--foreground)}
        .btn-danger{background:transparent;color:var(--destructive);box-shadow:0 0 0 1px color-mix(in srgb,var(--destructive) 32%,transparent)}
        .btn-danger:hover{background:var(--destructive-soft)}
        .btn-destructive{color:#fff;background:linear-gradient(180deg,#f0483f,#c9222c);box-shadow:inset 0 1px 0 rgba(255,255,255,.3),0 0 0 1px rgba(150,20,30,.5),0 10px 22px -8px rgba(201,34,44,.6)}
        .btn-destructive:hover{filter:brightness(1.07)}
        .btn-sm{height:34px;padding:0 12px;border-radius:10px;font-size:.82rem}
        .btn-icon{width:38px;height:38px;padding:0;border-radius:11px}
        .btn[disabled]{opacity:.6;cursor:not-allowed;transform:none}
        .i-sun{display:none}
        [data-theme="dark"] .i-sun{display:block}
        [data-theme="dark"] .i-moon{display:none}

        /* ---------- Page heading ---------- */
        .crumbs{display:flex;align-items:center;gap:6px;margin:0 0 14px;color:var(--muted-foreground);font-size:.875rem;font-weight:500}
        .crumbs a:hover{color:var(--foreground)}
        .crumbs svg{width:14px;height:14px;opacity:.7}
        .crumbs [aria-current]{color:var(--foreground)}
        .heading{font-size:clamp(2.2rem,5vw,3.4rem);font-weight:700;letter-spacing:-.045em;line-height:1.02;margin:0 0 10px}
        .subheading{color:var(--muted-foreground);font-size:1.0625rem;line-height:1.5;max-width:560px;margin:0}
        .page-head{display:flex;align-items:flex-end;justify-content:space-between;gap:24px;margin-bottom:30px}

        /* ---------- Stats ---------- */
        .stats-grid{display:grid;grid-template-columns:1.5fr 1fr 1fr;gap:16px;margin-bottom:24px}
        .stat-card{border-radius:24px;padding:22px;display:flex;flex-direction:column;justify-content:space-between;gap:26px;min-height:132px;overflow:hidden}
        .stat-icon{display:grid;place-items:center;width:36px;height:36px;border-radius:11px;color:#fff;box-shadow:inset 0 1px 0 rgba(255,255,255,.4),0 6px 14px -6px var(--tint,#888);background:linear-gradient(160deg,color-mix(in srgb,var(--tint) 78%,#fff),var(--tint))}
        .stat-icon svg{width:19px;height:19px}
        .stat-value{font-size:2rem;font-weight:700;letter-spacing:-.04em;line-height:1;font-variant-numeric:tabular-nums}
        .stat-label{color:var(--muted-foreground);font-size:.85rem;font-weight:500;margin-top:6px}
        .stat-card.hero{--tint:#f2701a;background:linear-gradient(145deg,color-mix(in srgb,var(--tint) 20%,transparent),transparent 62%),var(--card)}
        .stat-card.hero .stat-value{font-size:clamp(2.2rem,4vw,3.1rem)}
        .stat-card.hero .cur{color:var(--primary);margin-right:.06em;font-weight:600}
        .stat-card.t-blue{--tint:#2f7cf6}.stat-card.t-green{--tint:#2fb457}

        /* ---------- Table ---------- */
        .table-wrap{overflow:hidden}
        .table-scroll{overflow-x:auto}
        .table{width:100%;border-collapse:collapse;min-width:720px}
        .table th{text-align:left;color:var(--muted-foreground);font-size:.8rem;font-weight:500;padding:16px 22px 12px}
        .table td{padding:15px 22px;border-top:1px solid var(--border);vertical-align:middle}
        .table tbody tr{transition:background .2s}
        .table tbody tr:hover{background:var(--hover)}
        .product-cell{display:flex;align-items:center;gap:14px;min-width:0}
        .p-avatar{display:grid;place-items:center;flex:none;width:46px;height:46px;border-radius:14px;color:#fff;font-weight:700;font-size:1.1rem;background:linear-gradient(150deg,hsl(var(--h,25) 82% 58%),hsl(calc(var(--h,25) + 38) 78% 44%));box-shadow:inset 0 1px 0 rgba(255,255,255,.4),0 8px 16px -8px hsl(var(--h,25) 80% 40%)}
        .product-name{font-weight:600;letter-spacing:-.01em}
        .description{color:var(--muted-foreground);font-size:.85rem;margin-top:2px;max-width:380px;display:-webkit-box;-webkit-line-clamp:1;-webkit-box-orient:vertical;overflow:hidden}
        td.description{display:table-cell;max-width:none;margin:0;-webkit-line-clamp:unset;white-space:nowrap}
        .price{font-weight:650;font-variant-numeric:tabular-nums;letter-spacing:-.015em}
        .badge{white-space:nowrap;display:inline-flex;align-items:center;gap:7px;padding:4px 11px 4px 9px;border-radius:99px;font-size:.78rem;font-weight:600;color:var(--success);background:var(--success-soft)}
        .badge::before{content:"";width:6px;height:6px;border-radius:50%;background:currentColor;box-shadow:0 0 0 3px color-mix(in srgb,currentColor 22%,transparent)}
        .badge.empty,.stock.empty{color:var(--destructive);background:var(--destructive-soft)}
        .badge.neutral{color:var(--muted-foreground);background:var(--hover)}
        .actions{display:flex;gap:8px;justify-content:flex-end}
        .actions form{margin:0}
        .empty-state{display:flex;flex-direction:column;align-items:center;text-align:center;padding:72px 24px}
        .empty-state .stat-icon{width:64px;height:64px;border-radius:20px;margin-bottom:20px}
        .empty-state .stat-icon svg{width:30px;height:30px}
        .empty-state strong{font-size:1.3rem;letter-spacing:-.025em;margin-bottom:6px}
        .empty-state p{margin:0 0 22px;color:var(--muted-foreground)}

        /* ---------- Alerts / toast ---------- */
        .alert{display:flex;align-items:flex-start;gap:10px;padding:12px 14px;border-radius:14px;font-size:.9rem;font-weight:500;margin-bottom:20px}
        .alert svg{width:18px;height:18px;margin-top:1px}
        .alert-error{color:var(--destructive);background:var(--destructive-soft);box-shadow:0 0 0 1px color-mix(in srgb,var(--destructive) 25%,transparent)}
        .alert-success{position:fixed;z-index:80;top:84px;left:50%;transform:translateX(-50%);margin:0;padding:12px 18px 12px 14px;border-radius:99px;color:var(--foreground);background:var(--popover);-webkit-backdrop-filter:blur(24px) saturate(180%);backdrop-filter:blur(24px) saturate(180%);box-shadow:inset 0 1px 0 var(--edge),0 0 0 1px var(--border),0 24px 44px -16px var(--shadow);align-items:center;max-width:calc(100vw - 32px);animation:toast-in .55s var(--spring) both,toast-out .4s ease 5.5s forwards}
        .alert-success svg{color:var(--success)}
        @keyframes toast-in{from{opacity:0;transform:translate(-50%,-18px) scale(.94)}to{opacity:1;transform:translate(-50%,0) scale(1)}}
        @keyframes toast-out{to{opacity:0;visibility:hidden;transform:translate(-50%,-10px) scale(.97)}}

        /* ---------- Forms ---------- */
        .form-layout{display:grid;grid-template-columns:minmax(0,1fr) 340px;gap:24px;align-items:start;margin-top:32px}
        .form-card{padding:30px}
        .card-head{margin-bottom:24px}
        .card-title{font-size:1.15rem;font-weight:650;letter-spacing:-.02em;margin:0 0 2px}
        .card-desc{color:var(--muted-foreground);font-size:.9rem;margin:0}
        .form-grid{display:grid;grid-template-columns:1fr 1fr;gap:20px}
        .field{display:flex;flex-direction:column;gap:8px;min-width:0}
        .field-wide{grid-column:1/-1}
        .label{font-size:.85rem;font-weight:600;letter-spacing:-.005em}
        .hint{color:var(--muted-foreground);font-weight:500;font-size:.8rem}
        .input,.textarea{width:100%;min-height:46px;padding:11px 14px;border:0;border-radius:13px;background:var(--input);color:var(--foreground);outline:none;box-shadow:inset 0 1px 2px var(--shadow),0 0 0 1px var(--input-border);transition:box-shadow .2s,background .2s}
        .input::placeholder,.textarea::placeholder{color:var(--muted-foreground);opacity:.75}
        .input:focus,.textarea:focus{background:var(--card-solid);box-shadow:inset 0 1px 2px transparent,0 0 0 1.5px var(--primary),0 0 0 5px var(--ring)}
        .textarea{min-height:132px;resize:vertical;line-height:1.5}
        .input-wrap{position:relative;display:block}
        .input-wrap .input{padding-right:46px}
        .input-wrap.has-prefix .input{padding-left:34px}
        .input-prefix{position:absolute;left:14px;top:50%;transform:translateY(-50%);color:var(--muted-foreground);font-weight:600;pointer-events:none}
        .reveal{position:absolute;right:6px;top:50%;transform:translateY(-50%);display:grid;place-items:center;width:34px;height:34px;border:0;border-radius:9px;background:transparent;color:var(--muted-foreground);cursor:pointer}
        .reveal:hover{background:var(--hover);color:var(--foreground)}
        .reveal svg{width:18px;height:18px}
        .reveal .i-eye-off{display:none}
        .reveal[aria-pressed="true"] .i-eye{display:none}
        .reveal[aria-pressed="true"] .i-eye-off{display:block}
        .field:has(.error-text) .input,.field:has(.error-text) .textarea{box-shadow:inset 0 1px 2px var(--shadow),0 0 0 1.5px var(--destructive)}
        .error-text{color:var(--destructive);font-size:.8rem;font-weight:500}
        .form-actions{display:flex;justify-content:flex-end;gap:10px;margin-top:28px;padding-top:22px;border-top:1px solid var(--border)}
        input[type=number]{-moz-appearance:textfield}

        /* ---------- Live preview card ---------- */
        .preview-card{position:sticky;top:96px;border-radius:26px;padding:22px}
        .preview-title{font-size:.85rem;font-weight:600;color:var(--muted-foreground);margin:0 0 18px;display:flex;align-items:center;gap:8px}
        .preview-title::before{content:"";width:7px;height:7px;border-radius:50%;background:var(--success);box-shadow:0 0 0 3px var(--success-soft)}
        .preview-card .p-avatar{width:72px;height:72px;border-radius:22px;font-size:1.9rem;margin-bottom:18px}
        .preview-name{font-size:1.3rem;font-weight:700;letter-spacing:-.03em;line-height:1.2;margin:0 0 6px;overflow-wrap:anywhere}
        .preview-desc{color:var(--muted-foreground);margin:0 0 20px;font-size:.9rem;display:-webkit-box;-webkit-line-clamp:4;-webkit-box-orient:vertical;overflow:hidden;overflow-wrap:anywhere}
        .preview-name.is-placeholder,.preview-desc.is-placeholder{opacity:.55}
        .preview-foot{display:flex;align-items:center;justify-content:space-between;gap:12px;padding-top:16px;border-top:1px solid var(--border)}
        .preview-price{font-size:1.5rem;font-weight:700;letter-spacing:-.035em;font-variant-numeric:tabular-nums}

        /* ---------- Auth ---------- */
        .auth-page{flex:1;display:grid;place-items:center;padding:24px 20px 8px}
        .auth-card{width:min(100%,410px);padding:32px 34px 30px}
        .auth-logo{display:flex;flex-direction:column;align-items:center;text-align:center;margin-bottom:20px}
        .auth-logo .mark{width:68px;height:68px;margin-bottom:12px;filter:drop-shadow(0 16px 26px rgba(240,50,60,.38))}
        .auth-logo .name{font-weight:650;font-size:1.05rem;letter-spacing:-.02em}
        .auth-logo .tag{color:var(--muted-foreground);font-size:.85rem}
        .auth-title{font-size:1.9rem;font-weight:700;letter-spacing:-.04em;line-height:1.1;margin:0 0 8px;text-align:center}
        .auth-copy{color:var(--muted-foreground);line-height:1.5;margin:0 0 22px;text-align:center}
        .auth-form{display:grid;gap:16px}
        .auth-form .btn{width:100%;height:46px;margin-top:6px}

        /* ---------- Footer + "Built with" dock ---------- */
        .site-footer{padding:20px 0 28px}
        .footer-inner{display:flex;flex-direction:column;align-items:center;gap:16px}
        .built-with{display:flex;flex-direction:row;align-items:center;gap:16px;padding-top:26px}
        .bw-label{color:var(--muted-foreground);font-size:.85rem;font-weight:500}
        .dock{display:flex;align-items:flex-end;gap:10px;margin:0;padding:10px 12px;list-style:none;border-radius:26px}
        .dock li{position:relative;display:block}
        .dock-icon{display:grid;place-items:center;width:48px;height:48px;border-radius:14px;background:var(--tile);box-shadow:inset 0 1px 0 var(--edge),0 0 0 1px var(--border),0 8px 16px -8px var(--shadow);transform-origin:50% 100%;transition:transform .3s var(--spring)}
        .dock-icon svg{width:26px;height:26px}
        .dock-icon.mono{color:var(--foreground)}
        .dock-icon.wide svg{width:34px;height:34px}
        .dock li:hover .dock-icon{transform:translateY(-10px) scale(1.42)}
        .dock li:hover + li .dock-icon,.dock li:has(+ li:hover) .dock-icon{transform:translateY(-5px) scale(1.2)}
        .dock li::after{content:attr(data-label);position:absolute;left:50%;bottom:calc(100% + 30px);transform:translate(-50%,6px);padding:5px 10px;border-radius:9px;white-space:nowrap;font-size:.75rem;font-weight:600;background:var(--popover);color:var(--foreground);box-shadow:0 0 0 1px var(--border),0 10px 24px -10px var(--shadow);-webkit-backdrop-filter:blur(16px);backdrop-filter:blur(16px);opacity:0;pointer-events:none;transition:opacity .2s,transform .2s;z-index:5}
        .dock li:hover::after{opacity:1;transform:translate(-50%,0)}
        .footer-note{text-align:center;color:var(--muted-foreground);font-size:.78rem;margin:0}

        /* ---------- Confirm dialog ---------- */
        .modal-overlay{position:fixed;inset:0;z-index:90;display:none;align-items:center;justify-content:center;padding:20px;background:rgba(10,10,20,.32);-webkit-backdrop-filter:blur(10px) saturate(120%);backdrop-filter:blur(10px) saturate(120%)}
        .modal-overlay.open{display:flex;animation:fade-in .22s ease}
        .modal-card{width:min(100%,360px);text-align:center;padding:28px 24px 20px;border-radius:30px;background:var(--popover);-webkit-backdrop-filter:blur(40px) saturate(190%);backdrop-filter:blur(40px) saturate(190%);box-shadow:inset 0 1px 0 var(--edge),0 0 0 1px var(--border),0 50px 90px -30px var(--shadow);animation:modal-in .42s var(--spring)}
        @keyframes modal-in{from{opacity:0;transform:scale(.86) translateY(10px)}to{opacity:1;transform:none}}
        @keyframes fade-in{from{opacity:0}to{opacity:1}}
        .modal-icon{display:grid;place-items:center;width:56px;height:56px;border-radius:18px;margin:0 auto 16px;color:#fff;background:linear-gradient(160deg,#ff7d72,#e0323c);box-shadow:inset 0 1px 0 rgba(255,255,255,.4),0 12px 22px -10px rgba(224,50,60,.7)}
        .modal-icon svg{width:26px;height:26px}
        .modal-title{font-size:1.15rem;font-weight:700;letter-spacing:-.025em;margin:0 0 6px}
        .modal-body{color:var(--muted-foreground);line-height:1.5;margin:0 0 22px;font-size:.9rem}
        .modal-actions{display:grid;grid-template-columns:1fr 1fr;gap:10px}
        .modal-actions .btn{width:100%}

        /* ---------- Responsive ---------- */
        @media(max-width:960px){
            .form-layout{grid-template-columns:1fr}
            .preview-card{position:relative;top:0}
            .stats-grid{grid-template-columns:1fr 1fr}
            .stat-card.hero{grid-column:1/-1}
        }
        @media(max-width:720px){
            .shell{padding:0 16px}
            main{padding:28px 0 32px}
            .topbar{padding:10px 12px 0}
            .topbar-inner{grid-template-columns:1fr auto;height:56px}
            .user-chip span:last-child{display:none}
            .user-chip{padding:0}
            .tools .logout-text{display:none}
            .tools .btn-ghost.with-text{width:38px;padding:0}
            /* iOS-style bottom tab bar */
            .seg{position:fixed;left:50%;bottom:calc(14px + env(safe-area-inset-bottom));transform:translateX(-50%);z-index:45;padding:6px;border-radius:22px;gap:4px;background:var(--popover);-webkit-backdrop-filter:blur(28px) saturate(180%);backdrop-filter:blur(28px) saturate(180%);box-shadow:inset 0 1px 0 var(--edge),0 0 0 1px var(--border),0 20px 40px -14px var(--shadow)}
            .nav-link{flex-direction:column;gap:3px;padding:8px 22px;font-size:.72rem;border-radius:16px}
            .nav-link svg{width:21px;height:21px}
            .site-footer{padding-bottom:104px}
            .page-head{flex-direction:column;align-items:flex-start;gap:18px}
            .form-grid{grid-template-columns:1fr}
            .field-wide{grid-column:auto}
            .form-card{padding:22px}
            .auth-card{padding:32px 24px 28px}
            .stats-grid{grid-template-columns:1fr}
            .stat-card{min-height:0;flex-direction:row;align-items:center;gap:16px}
            .stat-card.hero{flex-direction:column;align-items:flex-start;gap:20px}
            .built-with{flex-direction:column;gap:10px}
            .dock{gap:6px;padding:8px 10px}
            .dock-icon{width:42px;height:42px;border-radius:12px}
            .dock-icon svg{width:23px;height:23px}
            /* Table rows become cards */
            .table-cards{min-width:0;display:block}
            .table-cards thead{display:none}
            .table-cards tbody{display:block}
            .table-cards tr{display:grid;grid-template-columns:1fr auto;grid-template-areas:"prod prod" "price stock" "date act";gap:10px 12px;padding:16px 18px;border-top:1px solid var(--border)}
            .table-cards tbody tr:first-child{border-top:0}
            .table-cards td{display:block;padding:0;border:0}
            .td-product{grid-area:prod}.td-price{grid-area:price;align-self:center}.td-stock{grid-area:stock;justify-self:end}.td-date{grid-area:date;align-self:center}.td-actions{grid-area:act}
            .description{max-width:none}
        }
        @media(prefers-reduced-motion:reduce){
            .blob{animation:none}
            .alert-success{animation:toast-out .01s ease 6s forwards}
            .modal-card,.modal-overlay.open{animation:none}
            *{transition-duration:.01ms!important}
        }
    </style>
</head>
<body>
<div class="ambient" aria-hidden="true"><i class="blob b1"></i><i class="blob b2"></i><i class="blob b3"></i></div>
<svg width="0" height="0" style="position:absolute" aria-hidden="true" focusable="false">
  <defs>
    <symbol id="i-plus" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7-7v14"/></symbol>
    <symbol id="i-pencil" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497zM15 5l4 4"/></symbol>
    <symbol id="i-trash" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11v6m4-6v6m5-11v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6M3 6h18M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></symbol>
    <symbol id="i-arrow-right" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7-7l7 7l-7 7"/></symbol>
    <symbol id="i-package" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73zm1 .27V12"/><path d="M3.29 7L12 12l8.71-5M7.5 4.27l9 5.15"/></g></symbol>
    <symbol id="i-layers" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83z"/><path d="M2 12a1 1 0 0 0 .58.91l8.6 3.91a2 2 0 0 0 1.65 0l8.58-3.9A1 1 0 0 0 22 12"/><path d="M2 17a1 1 0 0 0 .58.91l8.6 3.91a2 2 0 0 0 1.65 0l8.58-3.9A1 1 0 0 0 22 17"/></g></symbol>
    <symbol id="i-philippine-peso" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 11H4m16-4H4m3 14V4a1 1 0 0 1 1-1h4a1 1 0 0 1 0 12H7"/></symbol>
    <symbol id="i-log-out" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16 17l5-5l-5-5m5 5H9m0 9H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/></symbol>
    <symbol id="i-sun" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="4"/><path d="M12 2v2m0 16v2M4.93 4.93l1.41 1.41m11.32 11.32l1.41 1.41M2 12h2m16 0h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41"/></g></symbol>
    <symbol id="i-moon" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.985 12.486a9 9 0 1 1-9.473-9.472c.405-.022.617.46.402.803a6 6 0 0 0 8.268 8.268c.344-.215.825-.004.803.401"/></symbol>
    <symbol id="i-eye" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M2.062 12.348a1 1 0 0 1 0-.696a10.75 10.75 0 0 1 19.876 0a1 1 0 0 1 0 .696a10.75 10.75 0 0 1-19.876 0"/><circle cx="12" cy="12" r="3"/></g></symbol>
    <symbol id="i-eye-off" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M10.733 5.076a10.744 10.744 0 0 1 11.205 6.575a1 1 0 0 1 0 .696a10.8 10.8 0 0 1-1.444 2.49m-6.41-.679a3 3 0 0 1-4.242-4.242"/><path d="M17.479 17.499a10.75 10.75 0 0 1-15.417-5.151a1 1 0 0 1 0-.696a10.75 10.75 0 0 1 4.446-5.143M2 2l20 20"/></g></symbol>
    <symbol id="i-package-open" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M12 22v-9m3.17-10.79a1.67 1.67 0 0 1 1.63 0L21 4.57a1.93 1.93 0 0 1 0 3.36L8.82 14.79a1.66 1.66 0 0 1-1.64 0L3 12.43a1.93 1.93 0 0 1 0-3.36z"/><path d="M20 13v3.87a2.06 2.06 0 0 1-1.11 1.83l-6 3.08a1.93 1.93 0 0 1-1.78 0l-6-3.08A2.06 2.06 0 0 1 4 16.87V13"/><path d="M21 12.43a1.93 1.93 0 0 0 0-3.36L8.83 2.2a1.64 1.64 0 0 0-1.63 0L3 4.57a1.93 1.93 0 0 0 0 3.36l12.18 6.86a1.64 1.64 0 0 0 1.63 0z"/></g></symbol>
    <symbol id="i-chevron-right" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 18l6-6l-6-6"/></symbol>
    <symbol id="i-circle-check" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="m16 9l-5.5 5.5L8 12"/></g></symbol>
    <symbol id="i-circle-alert" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v4m0 4h.01"/></g></symbol>
    <symbol id="i-boxes" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M2.97 12.92A2 2 0 0 0 2 14.63v3.24a2 2 0 0 0 .97 1.71l3 1.8a2 2 0 0 0 2.06 0L12 19v-5.5l-5-3zM7 16.5l-4.74-2.85M7 16.5l5-3m-5 3v5.17m5-8.17V19l3.97 2.38a2 2 0 0 0 2.06 0l3-1.8a2 2 0 0 0 .97-1.71v-3.24a2 2 0 0 0-.97-1.71L17 10.5zm5 3l-5-3m5 3l4.74-2.85M17 16.5v5.17"/><path d="M7.97 4.42A2 2 0 0 0 7 6.13v4.37l5 3l5-3V6.13a2 2 0 0 0-.97-1.71l-3-1.8a2 2 0 0 0-2.06 0zM12 8L7.26 5.15M12 8l4.74-2.85M12 13.5V8"/></g></symbol>
    <symbol id="i-wallet" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1"/><path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4"/></g></symbol>
    <symbol id="logo-mark" viewBox="0 0 1024 1024">
  <defs>
    <linearGradient id="bj-bg" x1="140" y1="0" x2="880" y2="1024" gradientUnits="userSpaceOnUse">
      <stop offset="0" stop-color="#FFB443"/>
      <stop offset=".48" stop-color="#FF6B1F"/>
      <stop offset="1" stop-color="#F0254F"/>
    </linearGradient>
    <radialGradient id="bj-low" cx="60%" cy="112%" r="70%">
      <stop offset="0" stop-color="#FF2D6F" stop-opacity=".55"/>
      <stop offset="1" stop-color="#FF2D6F" stop-opacity="0"/>
    </radialGradient>
    <radialGradient id="bj-glow" cx="30%" cy="8%" r="75%">
      <stop offset="0" stop-color="#fff" stop-opacity=".55"/>
      <stop offset=".55" stop-color="#fff" stop-opacity="0"/>
    </radialGradient>
    <linearGradient id="bj-rim" x1="0" y1="0" x2="0" y2="1">
      <stop offset="0" stop-color="#fff" stop-opacity=".75"/>
      <stop offset=".35" stop-color="#fff" stop-opacity=".05"/>
      <stop offset="1" stop-color="#fff" stop-opacity=".22"/>
    </linearGradient>
    <linearGradient id="bj-glyph" x1="0" y1="256" x2="0" y2="790" gradientUnits="userSpaceOnUse">
      <stop offset="0" stop-color="#fff"/>
      <stop offset="1" stop-color="#FFE9DA"/>
    </linearGradient>
    <filter id="bj-shadow" x="-20%" y="-20%" width="140%" height="150%">
      <feDropShadow dx="0" dy="14" stdDeviation="16" flood-color="#8A1030" flood-opacity=".38"/>
    </filter>
    <clipPath id="bj-clip"><path d="M1024 512 L1023 705 L1021 766 L1017 810 L1011 845 L1004 875 L995 900 L985 922 L972 941 L958 958 L941 972 L922 985 L900 995 L875 1004 L845 1011 L810 1017 L766 1021 L705 1023 L512 1024 L319 1023 L258 1021 L214 1017 L179 1011 L149 1004 L124 995 L102 985 L83 972 L66 958 L52 941 L39 922 L29 900 L20 875 L13 845 L7 810 L3 766 L1 705 L0 512 L1 319 L3 258 L7 214 L13 179 L20 149 L29 124 L39 102 L52 83 L66 66 L83 52 L102 39 L124 29 L149 20 L179 13 L214 7 L258 3 L319 1 L512 0 L705 1 L766 3 L810 7 L845 13 L875 20 L900 29 L922 39 L941 52 L958 66 L972 83 L985 102 L995 124 L1004 149 L1011 179 L1017 214 L1021 258 L1023 319Z"/></clipPath>
  </defs>
  <path d="M1024 512 L1023 705 L1021 766 L1017 810 L1011 845 L1004 875 L995 900 L985 922 L972 941 L958 958 L941 972 L922 985 L900 995 L875 1004 L845 1011 L810 1017 L766 1021 L705 1023 L512 1024 L319 1023 L258 1021 L214 1017 L179 1011 L149 1004 L124 995 L102 985 L83 972 L66 958 L52 941 L39 922 L29 900 L20 875 L13 845 L7 810 L3 766 L1 705 L0 512 L1 319 L3 258 L7 214 L13 179 L20 149 L29 124 L39 102 L52 83 L66 66 L83 52 L102 39 L124 29 L149 20 L179 13 L214 7 L258 3 L319 1 L512 0 L705 1 L766 3 L810 7 L845 13 L875 20 L900 29 L922 39 L941 52 L958 66 L972 83 L985 102 L995 124 L1004 149 L1011 179 L1017 214 L1021 258 L1023 319Z" fill="url(#bj-bg)"/>
  <g clip-path="url(#bj-clip)">
    <rect width="1024" height="1024" fill="url(#bj-glow)"/>
    <rect width="1024" height="1024" fill="url(#bj-low)"/>
  </g>
  <path d="M1024 512 L1023 705 L1021 766 L1017 810 L1011 845 L1004 875 L995 900 L985 922 L972 941 L958 958 L941 972 L922 985 L900 995 L875 1004 L845 1011 L810 1017 L766 1021 L705 1023 L512 1024 L319 1023 L258 1021 L214 1017 L179 1011 L149 1004 L124 995 L102 985 L83 972 L66 958 L52 941 L39 922 L29 900 L20 875 L13 845 L7 810 L3 766 L1 705 L0 512 L1 319 L3 258 L7 214 L13 179 L20 149 L29 124 L39 102 L52 83 L66 66 L83 52 L102 39 L124 29 L149 20 L179 13 L214 7 L258 3 L319 1 L512 0 L705 1 L766 3 L810 7 L845 13 L875 20 L900 29 L922 39 L941 52 L958 66 L972 83 L985 102 L995 124 L1004 149 L1011 179 L1017 214 L1021 258 L1023 319Z" fill="none" stroke="url(#bj-rim)" stroke-width="6"/>
  <g fill="none" stroke="url(#bj-glyph)" stroke-width="92" stroke-linecap="round" stroke-linejoin="round" filter="url(#bj-shadow)" transform="translate(18 -11)">
    <path d="M392 256 V622 C392 730 336 790 236 790" /><path d="M392 256 H560 C650 256 706 306 706 384 C706 462 650 512 560 512 H392" /><path d="M392 512 H588 C688 512 752 566 752 650 C752 734 688 790 588 790 H392" />
  </g>
</symbol>
<symbol id="logo-lavalust" viewBox="0 0 88 88"><image width="88" height="88" href="data:image/png;base64,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"/></symbol>
<symbol id="logo-github" viewBox="0 0 24 24"><path fill="currentColor" d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></symbol>
<symbol id="logo-render" viewBox="0 0 24 24"><path fill="currentColor" d="M18.263.007c-3.121-.147-5.744 2.109-6.192 5.082-.018.138-.045.272-.067.405-.696 3.703-3.936 6.507-7.827 6.507-1.388 0-2.691-.356-3.825-.979a.2024.2024 0 0 0-.302.178V24H12v-8.999c0-1.656 1.338-3 2.987-3h2.988c3.382 0 6.103-2.817 5.97-6.244-.12-3.084-2.61-5.603-5.682-5.75"/></symbol>
<symbol id="logo-vscode" viewBox="0 0 256 254">
    <defs>
        <path d="M180.82764,252.605272 C184.843951,254.170159 189.42406,254.069552 193.478224,252.11917 L245.979142,226.856851 C251.495593,224.202221 255.003889,218.618034 255.003889,212.49296 L255.003889,41.1971845 C255.003889,35.0719113 251.495593,29.4886211 245.979142,26.8339907 L193.478224,1.57068551 C188.158006,-0.989256713 181.931329,-0.362230036 177.262566,3.0323459 C176.595173,3.51727166 175.959655,4.05869672 175.363982,4.65536598 L74.8565893,96.3498444 L31.0778002,63.1181557 C27.0024197,60.0246398 21.3020866,60.2780499 17.5170718,63.7211005 L3.47578059,76.4937075 C-1.15402423,80.7052561 -1.15933349,87.9889043 3.46431538,92.2072265 L41.430759,126.844525 L3.46431538,161.482221 C-1.15933349,165.700742 -1.15402423,172.984291 3.47578059,177.19584 L17.5170718,189.967949 C21.3020866,193.411497 27.0024197,193.664509 31.0778002,190.571591 L74.8565893,157.339404 L175.363982,249.034221 C176.953772,250.625007 178.82048,251.823326 180.82764,252.605272 Z M191.291764,68.9559518 L115.029663,126.844525 L191.291764,184.733396 L191.291764,68.9559518 Z" id="vsc-path-1"></path>
        <linearGradient x1="50.0000484%" y1="-3.91645412e-07%" x2="50.0000484%" y2="99.999921%" id="vsc-linearGradient-3">
            <stop stop-color="#FFFFFF" offset="0%"></stop>
            <stop stop-color="#FFFFFF" stop-opacity="0" offset="100%"></stop>
        </linearGradient>
    </defs>
    <g>
				<mask id="vsc-mask-2" fill="white">
						<use  href="#vsc-path-1"></use>
				</mask>
				<g></g>
				<path d="M246.134784,26.873337 L193.593025,1.57523773 C187.51178,-1.35300582 180.243173,-0.117807811 175.469819,4.65514684 L3.46641717,161.482221 C-1.16004072,165.700742 -1.1547215,172.984291 3.47789235,177.19584 L17.5276804,189.967949 C21.3150858,193.411497 27.0189053,193.664509 31.0966765,190.571591 L238.228667,33.4363005 C245.177523,28.1646927 255.158535,33.1209324 255.158535,41.8432608 L255.158535,41.2332436 C255.158535,35.11066 251.651235,29.5293619 246.134784,26.873337 Z" fill="#0065A9" fill-rule="nonzero" mask="url(#vsc-mask-2)"></path>
				<path d="M246.134784,226.816011 L193.593025,252.11419 C187.51178,255.041754 180.243173,253.806579 175.469819,249.034221 L3.46641717,92.2070273 C-1.16004072,87.9888047 -1.1547215,80.7049573 3.47789235,76.4935082 L17.5276804,63.7209012 C21.3150858,60.2778506 27.0189053,60.0243409 31.0966765,63.1179565 L238.228667,220.252649 C245.177523,225.524058 255.158535,220.568416 255.158535,211.84549 L255.158535,212.456104 C255.158535,218.57819 251.651235,224.159388 246.134784,226.816011 Z" fill="#007ACC" fill-rule="nonzero" mask="url(#vsc-mask-2)"></path>
				<path d="M193.428324,252.134497 C187.345086,255.060069 180.076479,253.823898 175.303125,249.050544 C181.184153,254.931571 191.240868,250.765843 191.240868,242.448334 L191.240868,11.2729623 C191.240868,2.95542269 181.184153,-1.21005093 175.303125,4.67135981 C180.076479,-0.102038107 187.345086,-1.3389793 193.428324,1.58667934 L245.961117,26.8500144 C251.481553,29.5046448 254.991841,35.0879351 254.991841,41.2132082 L254.991841,212.509283 C254.991841,218.634357 251.481553,224.217548 245.961117,226.872178 L193.428324,252.134497 Z" fill="#1F9CF0" fill-rule="nonzero" mask="url(#vsc-mask-2)"></path>
				<path d="M180.827889,252.605272 C184.8442,254.169163 189.424309,254.069552 193.477476,252.11917 L245.978395,226.855855 C251.495842,224.201225 255.004138,218.618034 255.004138,212.49296 L255.004138,41.1969853 C255.004138,35.0717121 251.495842,29.4884219 245.979391,26.8337915 L193.477476,1.57052613 C188.158255,-0.989423064 181.931578,-0.362396387 177.261819,3.03217656 C176.595422,3.51710232 175.959904,4.05852738 175.363235,4.65519664 L74.8565395,96.3496452 L31.0777504,63.1179565 C27.0024695,60.0244405 21.3020368,60.2779503 17.517022,63.7209012 L3.4757806,76.4935082 C-1.15402423,80.7050569 -1.15933349,87.9888047 3.46431539,92.2071269 L41.4308088,126.844525 L3.46431539,161.482221 C-1.15933349,165.700742 -1.15402423,172.984291 3.4757806,177.19584 L17.517022,189.967949 C21.3020368,193.411497 27.0024695,193.664509 31.0777504,190.571591 L74.8565395,157.339404 L175.363235,249.034221 C176.953025,250.625007 178.820729,251.823326 180.827889,252.605272 Z M191.292013,68.9557526 L115.029912,126.844525 L191.292013,184.733396 L191.292013,68.9557526 Z" fill-opacity="0.25" fill="url(#vsc-linearGradient-3)" mask="url(#vsc-mask-2)"></path>
		</g>
</symbol>
<symbol id="logo-navicat" viewBox="0 0 64 64">
 
 
 
 <path style="fill:#228c1f" d="M 31.051228,5.0010171 C 22.614692,4.9209633 14.038002,9.577524 9.7703936,15.083137 6.2667788,19.604906 3.5850791,24.16628 2.9999992,29.649828 h 0.00331 C 3.1494004,32.765563 4.7675589,34.843145 8.431209,35 h 25.735456 l 1.586811,-11.48804 c 0.592576,-4.299996 1.403278,-8.627998 1.220188,-12.998004 -0.147306,-3.4964867 -3.287947,-5.4375807 -5.922308,-5.51226 z"/>
 <path style="fill:#228c1f" d="m 48.533943,13.259933 c -2.419884,4.666061 -5.102505,8.888884 -7.721761,13.134568 L 31.99974,40 57.439734,39.9953 c 1.764778,-0.246851 2.74236,-1.833912 3.018727,-3.599948 1.944724,-12.34131 -1.628625,-18.552141 -6.252778,-23.62094 -2.152506,-2.34305 -4.047204,-2.546113 -5.671189,0.485854 z"/>
 <path style="fill:#ffffff;opacity:0.1" d="M 51.171875 11.001953 C 50.226139 11.037302 49.347149 11.743782 48.535156 13.259766 L 48.533203 13.259766 C 46.113319 17.925827 43.431756 22.148847 40.8125 26.394531 L 32 40 L 32.648438 40 L 40.8125 27.394531 C 43.431756 23.148847 46.113319 18.925827 48.533203 14.259766 L 48.535156 14.259766 C 50.159141 11.227799 52.052572 11.430388 54.205078 13.773438 C 57.875805 17.797132 60.874527 22.553422 60.986328 30.511719 C 61.122762 21.944437 58.027249 16.963138 54.205078 12.773438 C 53.128825 11.601913 52.117611 10.966604 51.171875 11.001953 z"/>
 <path style="fill:#6ccc32" d="m 32.681361,24.04966 c -5.272462,-0.282994 -11.292614,0.59743 -15.263646,3.834213 -3.967957,3.234592 -6.635287,7.460402 -7.296179,12.36488 -0.8596288,8.232796 2.902075,13.119875 9.343803,16.716468 14.291616,5.447656 28.352756,-0.743771 36.124509,-10.275293 2.669306,-3.345903 1.013367,-7.190352 -0.579985,-9.414945 -4.80388,-6.707086 -10.964861,-12.615242 -22.32901,-13.225171 z"/>
 <path style="fill:#ffffff;opacity:0.1" d="M 31.050781 5.0019531 C 22.614245 4.9218993 14.03714 9.5783714 9.7695312 15.083984 C 6.2659165 19.605753 3.5850799 24.166843 3 29.650391 L 3.0039062 29.650391 C 3.0124939 29.833542 3.0436228 29.999984 3.0625 30.175781 C 3.7481359 24.903531 6.3680392 20.473954 9.7695312 16.083984 C 14.03714 10.578371 22.614245 5.9218993 31.050781 6.0019531 C 33.685142 6.0766324 36.827303 8.0171849 36.974609 11.513672 C 36.987691 11.82591 36.984904 12.137405 36.988281 12.449219 C 37.000751 11.804791 37.001684 11.159892 36.974609 10.513672 C 36.827303 7.0171852 33.685142 5.0766324 31.050781 5.0019531 z"/>
 <path style="fill:#ffffff;opacity:0.2" d="M 30.673828 24 C 25.935104 24.023188 20.892622 25.05258 17.417969 27.884766 C 13.450012 31.119358 10.781986 35.343569 10.121094 40.248047 C 10.012943 41.283828 9.9793911 42.267214 10.013672 43.201172 C 10.023052 42.569565 10.050559 41.923569 10.121094 41.248047 C 10.781986 36.343569 13.450012 32.119358 17.417969 28.884766 C 21.389001 25.647983 27.409179 24.765834 32.681641 25.048828 L 32.681641 25.050781 C 44.04579 25.66071 50.205886 31.568305 55.009766 38.275391 C 55.906026 39.526724 56.821636 41.290084 56.976562 43.189453 C 57.13207 40.918884 56.061443 38.743712 55.009766 37.275391 C 50.205886 30.568305 44.04579 24.66071 32.681641 24.050781 L 32.681641 24.048828 C 32.022583 24.013454 31.350789 23.996687 30.673828 24 z"/>
</symbol>
<symbol id="logo-aiven" viewBox="0 0 96 96"><image width="96" height="96" href="data:image/png;base64,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"/></symbol>
  </defs>
</svg>
<?php if ($username !== null): ?>
<header class="topbar">
    <div class="topbar-inner">
        <a class="brand" href="<?= site_url('products') ?>"><svg class="brand-mark" aria-hidden="true"><use href="#logo-mark"/></svg>Bhen Jay</a>
        <nav class="seg" aria-label="Main">
            <a class="nav-link" href="<?= site_url('products') ?>"<?= $nav_active === 'products' ? ' aria-current="page"' : '' ?>><svg aria-hidden="true"><use href="#i-boxes"/></svg>Products</a>
            <a class="nav-link" href="<?= site_url('products/create') ?>"<?= $nav_active === 'create' ? ' aria-current="page"' : '' ?>><svg aria-hidden="true"><use href="#i-plus"/></svg>Add product</a>
        </nav>
        <div class="tools">
            <button class="btn btn-ghost btn-icon" type="button" id="themeToggle" aria-label="Toggle light and dark theme"><svg class="i-moon" width="18" height="18" aria-hidden="true"><use href="#i-moon"/></svg><svg class="i-sun" width="18" height="18" aria-hidden="true"><use href="#i-sun"/></svg></button>
            <span class="user-chip"><span class="avatar"><?= htmlspecialchars(strtoupper(substr((string) $username, 0, 1)), ENT_QUOTES, 'UTF-8') ?></span><span><?= htmlspecialchars((string) $username, ENT_QUOTES, 'UTF-8') ?></span></span>
            <form method="post" action="<?= site_url('logout') ?>"><button class="btn btn-ghost btn-sm with-text" type="submit"><svg aria-hidden="true"><use href="#i-log-out"/></svg><span class="logout-text">Sign out</span></button></form>
        </div>
    </div>
</header>
<?php endif; ?>