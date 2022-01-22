        const formatterPeso = new Intl.NumberFormat('es-ES', {
            style: 'currency',
            currency: 'MXN',
            minimumFractionDigits: 0
        })
        //console.log(formatterPeso.format(value))
        // → $ 12.500

        const formatterDolar = new Intl.NumberFormat('en-US', {
            style: 'currency',
            currency: 'USD'
        })
        //console.log(formatterDolar.format(value))
        // → $12,500.00

        const formatterEuro = new Intl.NumberFormat('de-DE', {
            style: 'currency',
            currency: 'EUR'
        })
        //console.log(formatterEuro.format(value))
        // → 12.500,00 €

        // el yen japonés no tiene ninguna subdivisión
        const formatterYenes = new Intl.NumberFormat("ja-JP", {
            style: 'currency',
            currency: 'JPY'
        })
        //console.log(formatterYenes.format(value))
        // → ￥12,500

        /**
        *DECLARACION DE LAS MONEDAS
        */
        //var value = 1250;
        var peso = 1;  // Valor de divisa Peso
        var dolar = 20.50; //Valor de divisa Dollar
        var euro = 23.25; //Valor de divisa Euro

        window.addEventListener('load', function(){
            var array = new Array();
            var array_etiqutas = new Array();
            var array_inputs = new Array();
            var array_inputs_mx = new Array();
            var array_divisas_inputs = new Array();


            //alert("Hola, soy una alerta que sólo aparecerá 1 vez.");
            const elements = document.querySelectorAll('.tarifas');
            //console.log(elements);
            //var prices = document.getElementsByClassName("prices")[0].innerHTML;
            Array.from(elements).forEach((element, index) => {
                //console.log(element.innerHTML);
                array.push(parseFloat(element.defaultValue));
                //console.log(precio);
            });

            etiquetas = document.querySelectorAll('.prices');
            Array.from(etiquetas).forEach((etiqueta, index) => {
                array_etiqutas.push(etiqueta);
            });

            inputs = document.querySelectorAll('.prices_inputs');
            Array.from(inputs).forEach((input, index) => {
                array_inputs.push(input);
            });

            inputs_mx = document.querySelectorAll('.prices_inputs_mx');
            Array.from(inputs_mx).forEach((input_mx, index) => {
                array_inputs_mx.push(input_mx);
            });

            divas_inputs = document.querySelectorAll('.divisas_inputs');
            Array.from(divas_inputs).forEach((divisa_input, index) => {
                array_divisas_inputs.push(divisa_input);
            });

            // {{-- /* -----------------------------REVIEW[TEST] VALIDACION PARA EL TIPO DE MONEDA --------------------------------------------- */ --}}
            var laravel_locale =  "{{ app()->getLocale() }}";
            var locale = navigator.language || navigator.userLanguage;

            if (laravel_locale == 'es') {
                /*Aqui ira el script cuando mi idioma detectado es español */
                Array.from(array).forEach((element, index) => {
                    divisa = peso * element;
                    new_divisa = formatterPeso.format(divisa)
                    //console.log(array_etiqutas.innerHTML = new_divisa)
                    array_etiqutas[index].innerHTML = new_divisa
                    array_inputs[index].value = divisa
                    //document.getElementByClassName("mytext").value = "My value";
                    array_divisas_inputs[index].value = "MXN"
                });
            }else if (laravel_locale == 'en') {
                /*Aqui ira el script cuando mi idioma detectado es ingles */
                Array.from(array).forEach((element, index) => {

                    divisa = Math.round(element/dolar * 100) / 100;
                    //console.log(formatterDolar.format(divisa))
                    new_divisa = formatterDolar.format(divisa)
                    array_etiqutas[index].innerHTML = new_divisa + " USD"
                    array_inputs[index].value = divisa
                    array_inputs_mx[index].value = element
                    array_divisas_inputs[index].value = "USD"

                });
            }else if (laravel_locale == 'fr') {
                /*Aqui ira el script cuando mi idioma detectado es frances*/
                Array.from(array).forEach((element, index) => {
                    divisa = Math.round(element/euro * 100) / 100;
                    //console.log(formatterEuro.format(divisa));
                    new_divisa = formatterEuro.format(divisa)
                    array_etiqutas[index].innerHTML = new_divisa
                    array_inputs[index].value = divisa
                    array_inputs_mx[index].value = element
                    array_divisas_inputs[index].value = "EUR"


                });

            }


        }, false);

    /*
    console.log("Consultando...");
        fetch("http://api.exchangeratesapi.io/v1/latest?access_key=fdfd1c673832210ffa6b8413e7004ddf")
        .then(respuesta => respuesta.json())
        .then(respuestaDecodificada => {
            console.log(respuestaDecodificada);
        });
    */
