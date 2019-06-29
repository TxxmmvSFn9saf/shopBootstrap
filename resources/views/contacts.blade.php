@extends('layouts.header')
@section('content')

        <div class="contacts col-lg-12 col-md-12 col-sm-12 col-xs-12" >
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" >
                <form id="send" >
                    {{csrf_field()}}
                    <div class="form-group" >
                        <input type="text" name="name" class="form-control" placeholder="Ваше Имя:" required/>
                        <input type="email" name="email" class="form-control" placeholder="Email:" required/>
                        <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="10"
                                  name="msg" placeholder="Сообщение:" required></textarea>
                        <input type="submit" name="submit" class="form-control" >
                    </div>
                </form>
            </div>
            <div class="map col-lg-8 col-md-8 col-sm-12 col-xs-12" >

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5851.82807017323!2d37.61298431579592!3d55.752351183952115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54a50b315e573%3A0xa886bf5a3d9b2e68!2z0JzQvtGB0LrQvtCy0YHQutC40Lkg0JrRgNC10LzQu9GM!5e0!3m2!1sru!2s!4v1529305838408"
                            width="100%" height="250px" frameborder="0" style="border:0; border-radius: 5px;"
                            allowfullscreen></iframe>
                </div>
                <div class="address col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                    <p class="text-center">Адрес: Москва, Россия, 103073</p>
                    <p class="text-center"> Телефон: +7 495 697-03-49</p>
                    <p class="text-center"> Email: email@email.com</p>
                </div>
            </div>

        </div>

    @include('layouts.footer')
@endsection