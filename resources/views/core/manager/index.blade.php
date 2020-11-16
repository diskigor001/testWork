@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="card-header">Почта менеджера</div>

                    <div class="card-body">

                        <form action="{{ route('manager.set.email', Auth::user()->id) }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="email">email менеджера</label>
                                <input type="email" id="email" name="email" class="form-control" value="{{ Auth::user()->email }}" required>
                                <span class="small">На данный email будут отправлены тестовые email, при поступлении новой заявки</span>
                            </div>

                            <button type="submit" class="btn btn-danger">Обновить</button>
                        </form>

                    </div>
                </div>

                <div class="card">
                    <div class="card-header">Список</div>

                    <div class="card-body">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Тема</th>
                                    <th scope="col">Сообщение</th>
                                    <th scope="col">Имя</th>
                                    <th scope="col">email</th>
                                    <th scope="col">Файл</th>
                                    <th scope="col">Дата</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                {!! Application::getList() !!}
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
