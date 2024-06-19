<?php
ob_start();
?>
<div id="up">
    <p id="1">hello</p>
</div>
<form action="/send_message/" method="post" id="form">
    <input type="search" name="content" id="content">
    <input type="submit" value="envoyer" id="btn_send_message">
</form>
<script>
    let test = document.getElementById('form');
    let up = document.getElementById('up');
    let btn = document.getElementById('btn_send_message');
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        let data = new FormData(test);
        console.log(data);

        let response = fetch('/send_message/', {
            method: 'POST',
            body: data,
        })
            .then(res => res.json())
            .then(res => {
                console.log(res);
                let p = document.createElement('p')
                p.textContent = `${res.content}`
                up.append(p)
            })
    })
</script>


<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';
