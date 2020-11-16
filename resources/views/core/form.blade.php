@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Форма обратной связи</div>

                    <div class="card-body">
                        <form action="{{ route('send.form') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="subject">Тема</label>
                                <input type="text" name="subject" id="subject" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="message">Сообщение</label>
                                <textarea name="message" id="message" rows="5" class="form-control" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="file">Файл</label>
                                <input type="file" name="file" id="file" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-success" @if(!$check) disabled @endif>Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
