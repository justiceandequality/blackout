const today = new Date()
if (today.getDate() === 30 && today.getMonth() === 4 && today.getFullYear() === 2020) {
    const blackOut = document.createElement('div')
    blackOut.id = 'justiceandequality-blackout'

    // blackout style
    blackOut.style = 'position:absolute; top:0; bottom:0; background-color:#000000; height:100%; width:100%; z-index:999999; overflow:auto; border-color:#fff;'
    // Grab html body element
    const body = document.body
    // Append the blackout element to it
    body.append(blackOut)

    blackOut.innerHTML =
        `<div style="color:#fff; padding:1em;">
                    <div style="position:absolute; top:0; right:0; padding:.5em; text-align:right; color:#fff;">
                        <button onclick="handleContinueToSiteClick()">Continue to site</button>
                    </div>
                    <h1 style="font-size:8em; text-align:center;">Blackout 2020</h1>
                    <h2 style="font-size:3em; text-align:center;">June 7th 2020</h2>
                    <div style="font-size:2.5em; max-width:22em; margin:0 auto; margin-top:2em;">
                        <p>We are joining the blackout. Our neighbors, our friends, our family, and our coworkers are being treated unfairly, and that's an understatment.</p> <p style="margin-top:.5em;">Today, we choose to take a step towards action. We choose to be involved and let it affect us.</p>
                        <p style="margin-top:.5em;">You can still view our site, but before doing so, please join us in taking action. Join us in the fight for equality</p>
                    </div>
                    <div style="text-align:center; margin-top:2em;">
                        <button style="background-color:#fff; color:#000; padding:.5em; border-radius:0.25rem;" onclick="handleContinueToSiteClick()">View Website</button>
                    </div>
                </div>`

    const blackOutBubble = document.createElement('div')
    blackOutBubble.id = 'justiceandequality-blackout-bubble'

    blackOutBubble.style = 'position:absolute; height:8em; width:8em; border-bottom-right-radius:9999px; background-color:#000; top:0; left:0; cursor:pointer; z-index:99999; color:#fff; font-size:1em; padding-left:1.5em; padding-top:1em;'
    blackOutBubble.onclick = function () { handleBubbleClick() }
    blackOutBubble.innerHTML = 'Blackout <br> 2020'
    body.append(blackOutBubble)

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