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
                        <input type="radio" name="type_payment" id="img1" class="d-none imgbgchk" value="Efectivo">
                        <label for="img1">
                            <img src="https://cdn-icons-png.flaticon.com/512/438/438526.png" alt="Image 1" class="rounded">
                            <div class="tick_container">
                                <div class="tick"><i class="fa fa-check"></i></div>
                            </div>
                            </label>
                        </div>
                        <div class='col text-center'>
                        <input type="radio" name="type_payment" id="img2" class="d-none imgbgchk" value="Paypal">
                            <label for="img2">
                            <img src="https://seeklogo.com/images/P/paypal-logo-6ED6A5924E-seeklogo.com.png" alt="Image 2" class="rounded">
                            <div class="tick_container">
                                <div class="tick"><i class="fa fa-check"></i></div>
                            </div>
                            </label>
                        </div>
                    </div>
                    </div>
            </div>
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
