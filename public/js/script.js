function addComment() {
    const name = document.querySelector('input[name="name"]').value;
    const body = document.querySelector('textarea[name="body"]').value;



    let formData = new FormData();
    formData.append('name', name);
    formData.append('body', body);
    fetch('/article', {

        method: "POST",
        body: formData,
        headers: {
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf"]').getAttribute('content')
        }
    })

    location.reload();
}
