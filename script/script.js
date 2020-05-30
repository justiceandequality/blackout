const today = new Date()
if (today.getDate() === 30 && today.getMonth() === 4 && today.getFullYear() === 2020 && !localStorage.getItem('blackout2020')) {
    // create blackout element
    const blackOut = document.createElement('div')
    blackOut.id = 'blackout2020'
    // blackout style
    blackOut.style = 'position:absolute; top:0; bottom:0; background-color:#000000; height:100%; width:100%; z-index:999999; overflow:auto;'
    // Grab html body element
    const body = document.body
    // Append the blackout element to it
    body.append(blackOut)
    // Capture initial scroll setting
    const initialScrollSetting = body.style.overflow
    // Turn off scrolling
    // body.style.overflow = 'hidden'
    const content =
    `<div style="color:#fff;">
        <div style="position:absolute; top:0; right:0; padding:.5em; text-align:right; color:#fff;">
            <button onclick="continueToSite()">Continue to site</button>
        </div>
        <h1 style="font-size:8em; text-align:center;">Blackout2020</h1>
        <div style="font-size:2.5em; width:16em; margin:0 auto;">
            <p>We are joining the blackout. Our neighbors, our friends, our family, and our coworkers are being treated unfairly, and that's an understatment.</p> <p style="margin-top:.5em;">Today, we choose to take a step towards action. We choose to be involved and let it affect us.</p>
            <p style="margin-top:.5em;">You can still view our site, but before doing so, please join us in taking action. Join us in repairing our country</p>
        </div>
        <div style="text-align:center; margin-top:2em;">
            <button style="background-color:#fff; color:#000; padding:.5em; border-radius:0.25rem;" onclick="continueToSite()">View Website</button>
        </div>
    </div>`
    blackOut.innerHTML = content

    function continueToSite() {
        blackOut.remove()
        localStorage.setItem('blackout2020', true)
    }
}