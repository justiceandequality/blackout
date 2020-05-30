<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blackout</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tailwindcss/ui@latest/dist/tailwind-ui.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.18.0/styles/a11y-dark.min.css">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.0/dist/alpine.js" defer></script>
    </head>
    <body>
        <div class="h-screen w-full bg-black">
            <header>
                <h1 class="text-white text-6xl font-black text-center">Blackout2020</h1>
                <h2 class="text-white max-w-md mx-auto">Take a stand for equality. Take a stand for protection and safety. Take a stand, so that our brothers and sisters don't walk the streets in fear.</h2>
            </header>
            <div class="mt-12">
                <h3 class="text-center text-white text-3xl">Join the blackout by blacking your site out.</h3>
                <h4 class="text-center text-white text-xl">Add this code to the footer of your site</h4>
            </div>
            <div class="relative max-w-3xl mx-auto mt-8" x-data="{}">
                <div class="flex justify-end">
                    <textarea class="sr-only whitespace-pre-wrap" aria-hidden x-ref="blackOutScript">
                        &lt;script src="https://cdn.jsdelivr.net/gh/justiceandequality/blackoutscript@master/script/script.min.js"&gt;&lt;/script&gt;
                    </textarea>
                    <button type="button" @click="$refs.blackOutScript.select(); document.execCommand('copy');" class="p-1 text-gray-400 hover:text-gray-500 text-right flex justify-between items-center">
                        <span class="mr-2">Copy Code</span>
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <title>Copy</title>
                            <path d="M8 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z"></path>
                            <path d="M6 3a2 2 0 00-2 2v11a2 2 0 002 2h8a2 2 0 002-2V5a2 2 0 00-2-2 3 3 0 01-3 3H9a3 3 0 01-3-3z"></path>
                        </svg>
                    </button>
                </div>
                <pre class="block scrollbar-none m-0 p-2 overflow-auto text-black text-sm leading-noraml">
                    <code class="inline-block p-4 scrolling-touch subpixel-antialiased language-javascript rounded bg-white text-black mx-auto max-w-5xl shadow overflow-x">&lt;script src="https://cdn.jsdelivr.net/gh/justiceandequality/blackoutscript@master/script/script.min.js"&gt;&lt;/script&gt;</code>
                </pre>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.18.0/highlight.min.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
        <script src="https://cdn.jsdelivr.net/gh/justiceandequality/blackoutscript@master/script/script.min.js"></script>
    </body>
</html>