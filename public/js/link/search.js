
const addTag = (tagId) => {
    const inputElem = document.getElementById('search-Tags');
    const instance = M.Chips.getInstance(inputElem);
    const tagName = document.getElementById(tagId).innerText;
    
    instance.addChip({
        tag: tagName,
    });
}





