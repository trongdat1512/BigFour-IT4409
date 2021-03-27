const themeChanged = () => {
    let themeSelect = document.getElementById("theme-select").options
    let selectedTheme = themeSelect[themeSelect.selectedIndex].value 
    Array.from(document.getElementsByClassName("heading")).forEach(i => { i.style.color = selectedTheme })
    Array.from(document.getElementsByClassName("section-split-hr")).forEach(i => { i.style.borderColor = selectedTheme })
}
