@extends('app')

@section('content')
<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>Confirmar tu Suscripción</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-lg-5 mb-4">
            <div class="card p-4" style="background: #fdfdfd; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border-left: 5px solid #1f5fff;">
                <h4 class="mb-3" style="font-weight: 600;">Resumen del Pedido</h4>
                <hr>
                <div class="d-flex justify-content-between align-items-center my-3">
                    <div>
                        <h5 style="font-weight: 700; color: #1f5fff; margin: 0;">PLAN {{ $planUpper }}</h5>
                        <small class="text-muted">Suscripción Mensual de Software</small>
                    </div>
                    <span style="font-size: 22px; font-weight: 700; color: #333;">${{ number_format($price, 2) }}</span>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <span>Subtotal:</span>
                    <strong>${{ number_format($price, 2) }}</strong>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <span>Impuestos (0%):</span>
                    <strong class="text-success">$0.00</strong>
                </div>
                <div class="d-flex justify-content-between align-items-center" style="font-size: 18px; font-weight: 700;">
                    <span>Total a Pagar:</span>
                    <span style="color: #1f5fff;">${{ number_format($price, 2) }} / mes</span>
                </div>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="card p-4" style="border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                <h4 class="mb-4" style="font-weight: 600;"><i class="fa fa-lock text-success mr-2"></i>Pago 100% Seguro</h4>
                
                <form action="{{ route('checkout.process') }}" method="POST">
                    @csrf
                    <input type="hidden" name="plan_name" value="{{ $planUpper }}">
                    <input type="hidden" name="amount" value="{{ $price }}">

                    <div class="form-group mb-3">
                        <label style="font-weight: 600;">Nombre en la Tarjeta</label>
                        <input type="text" name="card_name" class="form-control" placeholder="Ej. Jhon Doe" required style="height: 45px;">
                    </div>

                    <div class="form-group mb-3">
                        <label style="font-weight: 600;">Número de Tarjeta</label>
                        <div class="input-group">
                            <input type="text" name="card_number" class="form-control" placeholder="4512 3456 7890 1234" maxlength="16" required style="height: 45px;">
                            <div class="input-group-append">
                                <span class="input-group-text bg-white"><i class="fa fa-credit-card text-muted"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label style="font-weight: 600;">Fecha de Expiración</label>
                                <input type="text" name="expiry" class="form-control" placeholder="MM/AA" maxlength="5" required style="height: 45px;">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label style="font-weight: 600;">Código CVC / CVV</label>
                                <input type="password" name="cvv" class="form-control" placeholder="123" maxlength="4" required style="height: 45px;">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-lg btn-success btn-block style_btn mt-3" style="background-color: #28a745; border: none; font-weight: 600; padding: 12px;">
                        <i class="fa fa-check-circle mr-2"></i> Confirmar Pago de ${{ number_format($price, 2) }}
                    </button>

                    <div class="text-center mt-3">
                        <a href="{{ url('/suscripciones') }}" class="text-muted" style="font-weight: 600; text-decoration: none;">
                            <i class="fa fa-arrow-left mr-1"></i> Cancelar y volver a Suscripciones
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection