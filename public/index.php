<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blackout 2020</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tailwindcss/ui@latest/dist/tailwind-ui.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.18.0/styles/a11y-dark.min.css">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.0/dist/alpine.js" defer></script>
        <script src="https://cdn.jsdelivr.net/gh/justiceandequality/blackout@0.2/script/script.min.js" defer></script>
    </head>
    <body>
        <div class="h-screen w-full bg-black">
            <header>
                <h1 class="text-white text-6xl font-black text-center">Blackout 2020</h1>
                <h2 class="text-white max-w-md mx-auto text-2xl">Take a stand for equality. Take a stand for protection and safety. Take a stand, so that our brothers and sisters don't walk the streets in fear.</h2>
            </header>
            <div class="mt-12">
                <h3 class="text-center text-white text-3xl">Join the blackout by blacking your site out.</h3>
                <h4 class="text-center text-white text-xl">Add this code to the bottom of your head tag in your site</h4>
            </div>
            <div class="relative max-w-3xl mx-auto mt-8" x-data="{}">
                <div class="flex justify-end">
                    <textarea class="sr-only whitespace-pre-wrap" aria-hidden x-ref="blackOutScript">
                        &lt;script src="https://cdn.jsdelivr.net/gh/justiceandequality/blackoutscript@0.2/script/script.min.js"&gt;&lt;/script&gt;
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
                    <code class="inline-block p-4 scrolling-touch subpixel-antialiased language-javascript rounded bg-white text-black mx-auto max-w-5xl shadow overflow-x">&lt;script src="https://cdn.jsdelivr.net/gh/justiceandequality/blackoutscript@0.2/script/script.min.js"&gt;&lt;/script&gt;</code>
                </pre>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.18.0/highlight.min.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
        <script>
            const today = new Date()
            if (today.getDate() === 30 && today.getMonth() === 4 && today.getFullYear() === 2020) {
                // create blackout element
                const blackOutBubble = document.createElement('div')
                blackOutBubble.id = 'justiceandequality-blackout-bubble'

                blackOutBubble.style = 'position:absolute; height:8em; width:8em; border-bottom-right-radius:9999px; background-color:#000; top:0; left:0;'

                const blackOut = document.createElement('div')
                blackOut.id = 'justiceandequality-blackout'

                // blackout style
                blackOut.style = 'position:absolute; top:0; bottom:0; background-color:#000000; height:100%; width:100%; z-index:999999; overflow:auto; border-color:#fff;'
                // Grab html body element
                const body = document.body
                // Append the blackout element to it
                body.append(blackOut)
                body.append(blackOutBubble)
                blackOut.innerHTML =
                `<div style="color:#fff;">
                    <div style="position:absolute; top:0; right:0; padding:.5em; text-align:right; color:#fff;">
                        <button onclick="handleContinueToSiteClick()">Continue to site</button>
                    </div>
                    <h1 style="font-size:8em; text-align:center;">Blackout2020</h1>
                    <div style="font-size:2.5em; width:16em; margin:0 auto;">
                        <p>We are joining the blackout. Our neighbors, our friends, our family, and our coworkers are being treated unfairly, and that's an understatment.</p> <p style="margin-top:.5em;">Today, we choose to take a step towards action. We choose to be involved and let it affect us.</p>
                        <p style="margin-top:.5em;">You can still view our site, but before doing so, please join us in taking action. Join us in repairing our country</p>
                    </div>
                    <div style="text-align:center; margin-top:2em;">
                        <button style="background-color:#fff; color:#000; padding:.5em; border-radius:0.25rem;" onclick="handleContinueToSiteClick()">View Website</button>
                    </div>
                </div>`

                function handleContinueToSiteClick() {
                    blackOut.style.display = 'none'
                    blackOutBubble.style.display = 'block'
                    localStorage.setItem(blackOut.id, true)
                }

                function handleBubbleClick() {
                    blackOutBubble.style.display = 'none'
                    blackOut.style.display = 'block'
                    localStorage.removeItem(blackOut.id)
                }

                if (localStorage.getItem(blackOut.id)) {
                    blackOutBubble.style.display = 'block'
                    blackOut.style.display = 'none'
                }
            }
        </script>
    </body>
</html>