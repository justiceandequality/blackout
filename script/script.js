const today = new Date()
if (today.getDate() === 30 && today.getMonth() === 4 && today.getFullYear() === 2020) {
    // create blackout element
    const blackOut = document.createElement('div')
    blackOut.id = 'blackout2020'
    // blackout style
    blackOut.style = 'position:absolute; top:0; bottom:0; background-color:#000000; height:100%; width:100%; z-index:999999;'
    // Grab html body element
    const body = document.body
    // Append the blackout element to it
    body.append(blackOut)
    // Capture initial scroll setting
    const initialScrollSetting = body.style.overflow
    // Turn off scrolling
    body.style.overflow = 'hidden'
    const content = `
        &lt;div style="position:absolute; top:0; right:0; padding:.5em; text-align:right; color:#fff;"&gt;
            &lt;button onclick="document.getElementById('blackout2020').remove()"&gt;Continue to site&lt;/a&gt;
        &lt;/div&gt;
    `
    blackOut.innerHTML = content
}