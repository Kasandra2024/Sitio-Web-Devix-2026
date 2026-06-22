@extends('app')
@section('content')
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>About</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="whole-wrap">
        <div class="container box_1170">
            
            <div class="section-top-border">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="single-defination" style="background: #fdfdfd; padding: 40px 30px; border-radius: 10px; box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.05); height: 100%; border-top: 4px solid #00D2C4;">
                            <div class="definition-icon mb-20" style="font-size: 35px; color: #00D2C4;">
                                <i class="fa fa-eye"></i>
                            </div>
                            <h3 class="mb-20" style="font-weight: 600; color: #1a1a1a;">Nuestra Visión</h3>
                            <p style="font-size: 15px; line-height: 1.67; color: #666;">
                                Ser la empresa de desarrollo de software líder en el mercado, proporcionando soluciones innovadoras y de alta calidad que ayuden a nuestros clientes a alcanzar sus objetivos.
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="single-defination" style="background: #fdfdfd; padding: 40px 30px; border-radius: 10px; box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.05); height: 100%; border-top: 4px solid #1f5fff;">
                            <div class="definition-icon mb-20" style="font-size: 35px; color: #1f5fff;">
                                <i class="fa fa-rocket"></i>
                            </div>
                            <h3 class="mb-20" style="font-weight: 600; color: #1a1a1a;">Nuestra Misión</h3>
                            <p style="font-size: 15px; line-height: 1.67; color: #666;">
                                En <strong>Devix Systems</strong>, nuestra misión es impulsar la excelencia en el desarrollo de software, comprometiéndonos a proporcionar soluciones innovadoras y de alta calidad que superen las expectativas de nuestros clientes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-top-border">
                <div class="row justify-content-center mb-30">
                    <div class="col-lg-12 text-center">
                        <h3 class="mb-20" style="font-weight: 600; position: relative; display: inline-block; padding-bottom: 10px;">Nuestros Valores</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="single-defination text-center" style="padding: 20px 15px; background: #fff; height: 100%;">
                            <div class="value-icon mb-15" style="font-size: 28px; color: #ffb400;"><i class="fa fa-star"></i></div>
                            <h4 class="mb-15" style="font-weight: 600;">Excelencia</h4>
                            <p style="font-size: 14px; color: #777;">Devix Systems se compromete a entregar software de alta calidad que cumpla con los requisitos de sus clientes.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="single-defination text-center" style="padding: 20px 15px; background: #fff; height: 100%;">
                            <div class="value-icon mb-15" style="font-size: 28px; color: #00d2c4;"><i class="fa fa-lightbulb-o"></i></div>
                            <h4 class="mb-15" style="font-weight: 600;">Innovación</h4>
                            <p style="font-size: 14px; color: #777;">Devix Systems está comprometiva con la innovación y la búsqueda de nuevas formas de mejorar sus productos.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="single-defination text-center" style="padding: 20px 15px; background: #fff; height: 100%;">
                            <div class="value-icon mb-15" style="font-size: 28px; color: #1f5fff;"><i class="fa fa-users"></i></div>
                            <h4 class="mb-15" style="font-weight: 600;">Trabajo en equipo</h4>
                            <p style="font-size: 14px; color: #777;">Devix Systems cree que el trabajo en equipo es un pilar esencial y crítico para alcanzar el éxito.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="single-defination text-center" style="padding: 20px 15px; background: #fff; height: 100%;">
                            <div class="value-icon mb-15" style="font-size: 28px; color: #ff5e14;"><i class="fa fa-heart"></i></div>
                            <h4 class="mb-15" style="font-weight: 600;">Cliente</h4>
                            <p style="font-size: 14px; color: #777;">Devix Systems está completamente enfocada y comprometida con la satisfacción de sus clientes.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-top-border">
                <h3 class="mb-30" style="font-weight: 600;">Historia</h3>
                <div class="row">
                    <div class="col-lg-12">
                        <blockquote class="generic-blockquote" style="font-size: 16px; line-height: 1.8;">
                            “Devix Systems fue fundada en 2022 por un grupo de universitarios ingenieros
                            de software con más de 4 años de experiencia en la industria.
                            La empresa se dedica al desarrollo de software a medida, desarrollo
                            de aplicaciones móviles, desarrollo de sitios web y consultoría en
                            tecnología.”
                        </blockquote>
                    </div>
                </div>
            </div>

            <div class="section-top-border">
                <h3 class="mb-30" style="font-weight: 600;">Equipo</h3>
                <div class="team_area">
                    <div class="container">
                        <div class="border_bottom">
                            <div class="row justify-content-center"> 
                                
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_team">
                                        <div class="team_thumb">
                                            <img src="{{ asset('img/team/ceo.png') }}" alt="Yamil Torrico">
                                        </div>
                                        <div class="team_info text-center">
                                            <h3>YAMIL TORRICO VASQUEZ</h3>
                                            <p>INGENIERO EN SISTEMAS / CEO & DESARROLLADOR</p>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_team">
                                        <div class="team_thumb">
                                            <img src="{{ asset('img/team/kasandra.jpeg') }}" alt="Kasandra Mamani">
                                        </div>
                                        <div class="team_info text-center">
                                            <h3>KASANDRA MAMANI RODRIGUEZ</h3>
                                            <p>INGENIERO EN SISTEMAS / COO & DESARROLLADORA</p>

                                        </div>
                                    </div>
                                </div>

                            </div> 
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection