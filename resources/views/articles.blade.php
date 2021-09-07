<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf" content="{{csrf_token()}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500;700;900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="header_block">
    <div class="container">
        <header class="header">
            <div class="header__contacts">
                <a href="tel:74999228974" class="header__phone">Телефон: (499) 340-94-71</a>
                <p class="header__emal"> Email: info@future-group.ru</p>
                <h1 class="header__comment">Комментарии</h1>
            </div>
            <a href="#" class="header__logo">
                <img src="images/logo.png" alt="logo">
            </a>
        </header>
    </div>
</div>
<div class="articles">
    <div class="blog">
        <div class="container">
            @foreach($comments as $comment)
            <div class="blog__info">
                <p class="blog__info_name">{{$comment->name}}</p>
                <p class="blog__info_date">{{$comment->created_at->format('H.i d.m.Y')}}</p>
            </div>
            <div class="blog__text">{{$comment->body}}</div>
            @endforeach
            <div class="pagination" style="margin-top: 10px; display: flex; justify-content: center; font-size: 10px">
                {{$comments->links()}}
            </div>
            <div class="blog__line"></div>
            <form class="blog__form" action="/article" method="post">
                @csrf
                <h1 class="blog__form_title">Оставить комментарий</h1>
                <div class="blog__form_inputs">
                    <label for="name" class="blog__form_label">Ваше имя</label>
                    <input type="text" name="name" class="blog__form_input" id="name">
                    <label for="body" class="blog__form_label">Ваш комментарий</label>
                    <textarea class="blog__form_input" name="body" id="body" rows="3"></textarea>
                </div>
                <button type="button" class="blog__form_btn" onclick="event.preventDefault();addComment()">Отправить</button>
            </form>
        </div>
    </div>
</div>
<div class="foot">
    <div class="container">
        <div class="footer">
            <img src="images/logo_min.png" alt="" class="footer__logo">
            <div class="footer__info">
                <a href="tel:74999228974" class="footer__info_number">Телефон: (499) 340-94-71</a>
                <p class="footer__info_email">Email: info@future-group.ru</p>
                <p class="footer__info_address">Адрес: 115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</p>
                <p class="footer__info_lic">© 2010 - 2014 Future. Все права защищены</p>
            </div>
        </div>
    </div>
</div>
<script src="js/script.js"></script>
</body>
</html>
