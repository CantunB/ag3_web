<style>

    .parent{
        height: 50vh;
    }
    .parent>.row{
        display: flex;
        align-items: center;
        height: 100%;
    }
    .col img{
        height:150px;
        width: 100%;
        cursor: pointer;
        transition: transform 1s;
        object-fit: cover;
    }
    .col label{
        overflow: hidden;
        position: relative;
    }
    .imgbgchk:checked + label>.tick_container{
        opacity: 1;
    }
/*         aNIMATION */
    .imgbgchk:checked + label>img{
        transform: scale(1.10);
        opacity: 0.3;
    }
    .tick_container {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-10%, -10%);
        -ms-transform: translate(-10%, -10%);
        cursor: pointer;
        text-align: center;
    }
    .tick {
        background-color: #4CAF50;
        color: white;
        font-size: 16px;
        padding: 6px 12px;
        height: 40px;
        width: 40px;
        border-radius: 100%;
    }
</style>
<div class="container">
    <form id="payment_form" method="POST">
        @csrf
        <div class="row">
            <!-- section left start -->
            <div class="col-md-12 col-lg-12 mt-4">
                <div class="row">
                <a class="mb-2 back" href="javascript:history.go(-1)"><i class="fas fa-arrow-left"></i> Regresar</a>
                </div>
                <div class="container parent">
                <h2 style="color: orange" class="text-center text-uppercase ">Selecciona un metodo de pago</h2>
                    <div class="row">
                        <div class='col text-center'>
                        <input type="radio" name="type_payment" id="img1" class="d-none imgbgchk" value="Arribo">
                        <label for="img1">
                            <h3 class="mb-4">{{__('arribo')}}</h3>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLcksclvcirts05OdENj2d5m4Okcw8K37HDQ&usqp=CAU" alt="ARRIVO" class="rounded">
                            <div class="tick_container">
                                <div class="tick"><i class="fa fa-check"></i></div>
                            </div>
                            </label>
                        </div>
                        <div class='col text-center'>
                        <input type="radio" name="type_payment" id="img2" class="d-none imgbgchk" value="Paypal">
                            <label for="img2">
                            <h3 class="mb-4">PAYPAL</h3>
                            <img src="https://helpmybusinesspos.info/wp-content/uploads/2017/09/Paypal-Logo-Transparent-mybusinesspos.png" alt="PAYPAL" class="rounded">
                            <div class="tick_container">
                                <div class="tick"><i class="fa fa-check"></i></div>
                            </div>
                            </label>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
        {{--  <div class="row mb-4 ">
            <div class="col-md-12 text center ">
                <div class="card flex-md-row mb-4 box-shadow h-md-250 border border-warning ">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="mb-2 text-primary">SERVICIO AEROPUERTO A HOTEL</strong>
                    <p><strong>NOMBRE:</strong> BERNABE CANTUN DOMINGUEZ</p>
                    <p><strong>CORREO:</strong> cantunberna@gmail.com</p>
                    <p><strong>TELEFONO:</strong> 9806723432</p>
                    <p><strong>AEROLINEA LLEGADA:</strong> AEROJET</p>
                    <p><strong>No.VUELO:</strong> FR324</p>
                    <p><strong>FECHA LLEGADA:</strong> Nov 12</p>

                    <p><strong>AEROLINEA SALIDA:</strong> AEROJET</p>
                    <p><strong>No.VUELO:</strong> FR324</p>
                    <p><strong>FECHA LLEGADA:</strong> Nov 12</p>
                </div>
                    <div class=" bg-dark border border-warning rounded " >
                        <img class="card-img-right flex-auto d-none d-md-block" src="{{ asset('assets/images/transport-van.png') }}" width="400" height="300" alt="Card image cap">
                    </div>
                </div>
            </div>
        </div>  --}}
        </div>
        <div class="row">
            <div class="container">
                <div class="container" id="cash_opt">
                    <div class="container">
                        <div class="row">
                            <div class="p-5 col-md-12 text-center">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-success" id="cash_submit" type="submit">FINALIZAR RESERVA</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container mb-6" id="paypal_opt">
                    <div class="container">
                        <div class="row">
                            <div class="p-5 col-md-12 text-center">
                                <div id="paypal-button-container"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

</form>
