    @extends('layout')
    @section('title')Форма отправки данных@endsection
    @section('namebutton')На главную@endsection


    @section('main_content')
        <h1>Форма добавления контакта</h1><br>
            @if($errors->any())

                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <form method="post" action="/formdata/check">
            @csrf
            <input type="text" name="name" id="name" placeholder="Введите Ф.И.О" class="form-control"><br>
            <input type="text" name="company" id="company" placeholder="Введите наименование компании" class="form-control"><br>
            <input type="tel" name="phonenumber" id="phonenumber" placeholder="Введите телефон" class="form-control"><br>
            <input type="email" name="email" id="email" placeholder="Введите email" class="form-control"><br>
            <input type="date" name="birthdate" id="birthdate" placeholder="Введите дату рождения" class="form-control"><br>
            <button type="submit" class="btn btn-success">Отправить</button>
        </form>
    @endsection
