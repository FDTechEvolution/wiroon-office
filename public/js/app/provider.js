function setDataEditProvider(id) {
    let name = document.querySelector('#provider-name > strong').innerText
    let type = document.querySelector('#provider-type').innerText
    let description = document.querySelector('#provider-description').innerText

    document.getElementById('name-input').value = name
    document.getElementById('type-input').value = type
    document.getElementById('description-input').value = description
    document.getElementById('provider-id').value = id
}