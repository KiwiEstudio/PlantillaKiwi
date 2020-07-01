@extends('layouts.sitioweb')
@section('seccion')
<div class="tm-main-content">
<div class="tm-content-box tm-content-box-home">                        
                    <img src="{{asset('assets/img/1080x360-01.jpg')}}" alt="Image" class="img-fluid tm-welcome-img">
                </div>
                <div class="row mb-5">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center mb-md-0 mb-4"><img src="{{asset('assets/img/4.jpg')}}" alt="Image" class="img-fluid" width="450" ></div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pl-md-4 tm-flex-center">
                        <div class="tm-about-text tm-flexbox-ie-fix">
                            <h2 class="tm-orange-text mb-4">Acerca de Nosotros</h2>
                            <p class="mb-4" style=”text-align: justify;” >
                                <h3 class="tm-orange-text mb-4">MISIÓN</h3>
                            Somos una empresa dedicada a ofrecer servicios de fotografía profesional,utilizando altos estándares de calidad en cada uno de nuestros productos y servicios, con el propósito de satisfacer las necesidades de nuestros clientes, ofreciendo un trato personalizado.</p>    
                        </div>                            
                    </div>
                </div> <!-- row -->
                <div class="row mb-5">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mb-md-0 mb-4 tm-flex-center">
                        <div class="tm-about-text tm-flexbox-ie-fix">
                            <h2 class="tm-orange-text mb-4">VISIÓN</h2>
                            <p class="mb-4" style=”text-align: justify;” >Ser la empresa líder en fotografía profesional, ofrecer amplios servicios y mayor cobertura a nivel nacional, utilizando para ello tecnologías innovadoras y un contacto más directo con nuestros clientes.</p>
                        </div>                            
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center pl-md-4"><img src="{{asset('assets/img/5.jpg')}}" alt="Image" class="img-fluid" width="450" ></div>
                </div> 
                <h2 class="tm-orange-text mb-4">SERVICIOS</h2><!-- row -->
                <div class="row mb-4">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 mb-4">
                        <div class="tm-bg-orange p-5">
                            <img src="{{asset('assets/img/2.jpg')}}" alt="Image" class="img-fluid" width="150" align="text-center" >
                            <h3 class="mb-4">XV AÑOS</h3>
                            <p style=”text-align: justify;”  >Queremos que tengas las mejores fotografías de tu evento tan importante, por eso nos esforzamos para que conserves esos recuerdos toda la vida, con un toque distinto. nunca está de más tomarse fotos con seres tan importantes en nuestras vidas</p><br><br>
                        </div>                            
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 mb-4">
                        <div class="tm-bg-orange p-5">
                            <img src="{{asset('assets/img/7.jpeg')}}" alt="Image" class="img-fluid" width="150" align="text-center" >
                            <h3 class="mb-4">GRADUACIONES</h3>
                            <p style=”text-align: justify;” >Realizamos estudios fotográficos profesionales, sesiones personalizadas, creativas, artísticas, a tu gusto, con propuestas únicas y de alta calidad para cubrir tus necesidades. Iluminación controlada, equipo preciso, tiempo, conocimientos, creatividad.</p>
                            <br><br>
                        </div>                            
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 mb-4">
                        <div class="tm-bg-orange p-5">
                            <img src="{{asset('assets/img/6.jpg')}}" alt="Image" class="img-fluid" width="150" align="text-center" >
                            <h3 class="mb-4">FAMILIAR Y MATERNAL</h3>
                            <p style=”text-align: justify;” >Queremos que tengas los mejores recuerdos de tu embarazo; por eso nos esforzamos en conseguir las fotografías que deseas, con tu sello personal. Si lo que buscas es algo distinto y creativo estás en el lugar correcto. Podemos hacer para ti y tu familia el mejor recuerdo.</p>

                    </div>
                </div> <!-- row -->                          
                    </div>
                </div>
            </div>
@endsection
