
const addTag = (tagId) => {
    const inputElem = document.getElementById('searchTags')
    const instance = M.Chips.getInstance(inputElem)
    const tagName = document.getElementById(tagId).innerText
    
    instance.addChip({
        tag: tagName,
    })
}

const submitSearch = () => {
    const tagsElement = document.getElementById('searchTags')
    const tagInstance = M.Chips.getInstance(tagsElement)
    const tags = tagInstance.chipsData
    let tagArray = []
    tags.forEach((tag) => {
        tagArray.push(tag['tag'])
    })

    if (!tagArray.length) {
        const errorMessageElement = document.getElementById('errorModalMessage')
        errorMessageElement.innerText = '検索するタグを入力してください'
        showModal('errorModal')
        return
    }

    const tagNameElement = document.getElementById('tagNames')
    tagNameElement.value = tagArray

    const searchForm = document.getElementById('searchForm')
    searchForm.submit()
}







