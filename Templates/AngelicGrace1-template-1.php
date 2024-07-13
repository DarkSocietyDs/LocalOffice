<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Imprimir Bautizo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>

        @font-face {
            font-family: "varela" ;
            src: url(../../resources/fonts/VarelaRound.ttf);
        }

        @font-face {
            font-family: "fraygabriel" ;
            src: url(../../resources/fonts/FrayGabriel.ttf);
        }

        @font-face {
            font-family: "dreamwood" ;
            src: url(../../resources/fonts/Dreamwood.ttf);
        }

            .main-color{
                color: #581A1A;
            }
            .secondary-color{
                color: #1C1C1C;
            }

            .fs-text-30{
                font-size: 30px;
            }
            .fs-text-25{
                font-size: 25px;
            }
            .fs-text-20{
                font-size: 20px;
            }
            .fs-text-18{
                font-size: 18px;
            }
            .fs-text-17{
                font-size: 17px;
            }
            .fs-text-16{
                font-size: 16px;
            }
            .fs-text-14{
                font-size: 14px;
            }
            .fs-text-12{
                font-size: 12px;
            }
            .fs-text-10{
                font-size: 10px;
            }

            .fw-900{
                font-weight: 900;
            }
            .fw-800{
                font-weight: 800;
            }
            .fw-700{
                font-weight: 700;
            }
            .fw-600{
                font-weight: 600;
            }
            .fw-500{
                font-weight: 500;
            }
        
            .ff-fraygabriel{
                font-family: "fraygabriel";
            }
            .ff-varela{
                font-family: "varela";
            }
            .ff-dreamwood{
                font-family: "dreamwood";
            }

            .mt-50{
                margin-top: 50px;
            }
            .mt-100{
                margin-top: 100px;
            }

            .mt-5-n{
                margin-top: -5px;
            }
            .mt-10-n{
                margin-top: -10px;
            }
            .mt-15-n{
                margin-top: -15px;
            }
            .mt-20-n{
                margin-top: -20px;
            }
            .mt-25-n{
                margin-top: -25px;
            }
            .mt-30-n{
                margin-top: -30px;
            }
            .mt-35-n{
                margin-top: -35px;
            }

            .m-side-5{
                margin: 0px 5px;
            }
            .m-side-10{
                margin: 0px 10px;
            }

            .m-left-10{
                margin-left: 10px;
            }
            .m-left-15{
                margin-left: 15px;
            }
            .m-left-40{
                margin-left: 40px;
            }
            .m-left-100{
                margin-left: 100px;
            }


            .line{
                width: 100%;
                height: 2px;
                background: #581A1A;
            }

            .ls-4{
                letter-spacing: 4px;
            }
            .ls-5{
                letter-spacing: 5px;
            }
            .ls-6{
                letter-spacing: 6px;
            }


            .s1-100{
                text-indent: 100px;
            }

            .middle{
                border-top: 3px solid #581A1A;
                border-bottom: 3px solid #581A1A;
                padding: 5px 0px;
                margin: 0px 50px;
            }

            .td-underline{
                text-decoration: underline;
            }

            .ta-j{
                text-align: justify;
            }
        

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        
        .main-container-catecumenos{
            width: 8.5in;
            height: 11in;
            border: 2px solid red;
            padding: 15px;
        }

        .main-container-catecumenos .content{
            width: 100%;
            height: 100%;
            /* border: 2px solid green; */
            background-image: url('.$MarginCatecumeno.');
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
            padding: 30px;
        }

        .main-container-catecumenos .content .canvas{
            width: 100%;
            height: 100%;
            /* border: 2px solid #000; */
            background-image: linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)), url('.$BGCatecumeno.');
            background-repeat: no-repeat;
            background-position: center;
            background-size: 80% 80%;
        }

        .main-container-catecumenos .content .canvas .logo{
            max-width: 100px;
        }

        .main-container{
            width: 8.5in;
            height: 5.5in;
            border: 2px solid #FFF;
            padding: 15px;
        }

        .main-container .content{
            width: 100%;
            height: 100%;
            /* border: 2px solid green; */
            background-image: url('.$Margin.');
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
            padding: 20px;
        }

        .main-container .content .canvas{
            width: 100%;
            height: 100%;
            /* border: 2px solid #000; */
            background-image: linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)), url('.$BGBautizo.');
            background-repeat: no-repeat;
            background-position: center;
            background-size: 80% 80%;
        }

        .tableHeader{
            border: 1px solid #000;
            height: 20px;
        }
        .tableHeader p{
            text-align: center;
            font-weight: 600;
            font-size: 10px;
        }

        .tableBody{
            border: 1px solid #000;
            height: 60px;
            padding: 2px;
        }
        .tableBody p{
            text-align-last: left;
            font-size: 9px;
        }


        .signatureLine{
            width: 100%;
            height: 1px;
            background: #000;
        }

        .signatureSacerdote{
            border-top: 1px solid #000;
        }


        #bautizante-.$IdRegistro.{
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            height: 48px;
        }

        .msg{
            text-align: center;
            text-transform: uppercase;
            font-size: 11px;
        }



        .qr-image{
            max-width: 80px;
        }
    </style>
</head>
<body>

    {{IF_CATECUMENO}}

        <div class="main-container-catecumenos">
            <div class="content">
                <div class="canvas">
                    <div class="container">

                        <div class="row">
                            <div class="col-sm-2">
                                <img class="img-fluid mx-auto d-block logo" src=".$Logo." alt="">
                            </div>

                            <div class="col-sm-8 mt-2">
                                <p class="text-center text-uppercase fw-900 main-color" id="diocesis-.$IdRegistro.">.$DataDiocesis.</p>
                                <p class="text-center text-uppercase fw-800 ff-varela main-color" id="parroquia-.$IdRegistro.">.$DataParroquia.</p>
                                <p class="text-center text-uppercase fw-600 ff-varela main-color" id="vicaria-.$IdRegistro.">.$DataVicaria.</p>
                                <p class="text-center text-uppercase fw-600 ff-varela main-color" id="decanato-.$IdRegistro.">.$DataDecanato.</p>
                            </div>

                            <div class="col-sm-2">
                                <img class="qr-image mt-2" src=".$User_QR." alt="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 mt-4">
                                <p class="text-uppercase text-center ff-varela fw-800 fs-text-20 middle">Acta de Sacramentos de Iniciación Cristiana</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 mt-5">
                                <p class="fw-600 fs-text-18 ta-j s1-100">.$TextCelebracionCatecumeno. del día <span class="fw-800 td-underline">.$DiaCatecumeno.</span> de <span class="fw-800 td-underline">.$MesCatecumeno.</span> de <span class="fw-800 td-underline">.$AnioCatecumeno.</span>; .$LugarCelebracionCatecumeno.. .$AdministradorSacramentalCatecumeno., administró los Sacramentos de Iniciación Cristiana (Bautismo, Confirmación y Eucaristía), según el rito de la Iglesia Latina Católica a:</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 mt-3">
                                <p class="text-center text-uppercase ff-dreamwood fw-800 fs-text-30">.$NombreBebe. .$PrimerApellido. .$SegundoApellido.</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <p class="fs-text-17">Nació en: <span class="fw-800">.$LugarNacimiento..</span></p>
                            </div>

                            <div class="col-sm-6">
                                <p class="text-end fs-text-17">El día <span class="fw-800">.$FechaNacimientoFormateada..</span></p>
                            </div>
                        </div>

                        <div class="row">
                            {{IF_SITUACION_PADRES_1}}
                                <div class="col-sm-12">
                                    <p class="fs-text-17">Sus padres: <span class="fw-800">.$NombrePadre. .$PrimerApellidoP. .$SegundoApellidoP.</span> y <span class="fw-800">.$NombreMadre. .$PrimerApellidoM. .$SegundoApellidoM.</span></p>
                                </div>
                            {{ENDIF_SITUACION_PADRES_1}}


                            {{IF_SITUACION_PADRES_2}}
                                <div class="col-sm-12">
                                    <p class="fs-text-17">Sus padres: <span class="fw-800">.$NombrePadre. .$PrimerApellidoP. .$SegundoApellidoP.</span> y <span class="fw-800">.$NombreMadre..$PrimerApellidoM..$SegundoApellidoM.</span></p>
                                </div>
                            {{ENDIF_SITUACION_PADRES_2}}


                            {{IF_SITUACION_PADRES_3}}
                                <div class="col-sm-12">
                                    <p class="fs-text-17">Sus padres: <span class="fw-800">.$NombreMadre. .$PrimerApellidoM. .$SegundoApellidoM.</span> y <span class="fw-800">.$NombrePadre..$PrimerApellidoP..$SegundoApellidoP.</span></p>
                                </div>
                            {{ENDIF_SITUACION_PADRES_3}}


                            {{IF_SITUACION_PADRES_4}}
                                <div class="col-sm-12">
                                    <p class="fs-text-17">Fue presentad.$GeneroBebe. por: .$NombrePadre. .$PrimerApellidoP. .$SegundoApellidoP. y .$NombreMadre. .$PrimerApellidoM. .$SegundoApellidoM.</p>
                                </div>
                            {{ENDIF_SITUACION_PADRES_4}}
                        </div>

                        <div class="row">
                            {{IF_PADRINO_MADRINA}}
                                <div class="col-sm-12">
                                    <p class="fs-text-17">Sus padrinos: <span class="fw-800">.$Padrino..</span></p>
                                    <p class="fs-text-17 m-left-100 mt-15-n"><span class="fw-800">.$Madrina..</span></p>
                                </div>
                            {{ENDIF_PADRINO_MADRINA}}


                            {{IF_SOLO_PADRINO}}
                                <div class="col-sm-12">
                                    <p class="fs-text-16">Su padrino: <span class="fw-800">.$Padrino..</span></p>
                                </div>
                            {{ENDIF_SOLO_PADRINO}}


                            {{IF_SOLO_MADRINA}}
                                <div class="col-sm-12">
                                    <p class="fs-text-16">Su madrina: <span class="fw-800">.$Madrina.</span></p>
                                </div>
                            {{ENDIF_SOLO_MADRINA}}
                        </div>

                        <div class="row mt-100">
                            <div class="col-sm-6">
                                <p class="text-center signatureSacerdote mx-3">.$DataCargoSacerdote. <br> .$DataSacerdote.</p>
                            </div>

                            <div class="col-sm-6">
                                <p class="text-center signatureSacerdote mx-3">.$DataObispo. <br> .$DataNumeroObispo.</p>
                            </div>
                        </div>

                        <div class="row mt-50">
                            <div class="col-sm-12">
                                <p>.$DataDireccionCortaDiocesis.. A .$FechaBautismoFormateada..</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <p class="text-center main-color fw-600 mx-4">.$DataDireccion.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    {{ENDIF_CATECUMENO}}

    

    {{IF_NO_CATECUMENO}}

    <div class="main-container">
        <div class="content">
            <div class="canvas">
                <div class="container">
                
                    <div class="row">
                        <div class="col-sm-2">
                            <img class="img-fluid mx-auto d-block logo" src=".$Logo." alt="">
                        </div>

                        <div class="col-sm-8">
                            <p class="text-center text-uppercase fw-900 main-color" id="diocesis-.$IdRegistro.">.$DataDiocesis.</p>
                            <p class="text-center text-uppercase fw-800 ff-varela main-color" id="parroquia-.$IdRegistro.">.$DataParroquia.</p>
                            <p class="text-center text-uppercase fw-600 ff-varela main-color" id="vicaria-.$IdRegistro.">.$DataVicaria.</p>
                            <p class="text-center text-uppercase fw-600 ff-varela main-color" id="decanato-.$IdRegistro.">.$DataDecanato.</p>
                        </div>

                        <div class="col-sm-2"></div>
                    </div>

                    <div class="line"></div>
                    <p class="ff-fraygabriel fw-800 text-center">Fe de Bautismo</p>

                    <div class="row">
                        <div class="col-sm-6">
                            <p class="text-uppercase text-center fs-text-12">El día: <span class="fw-600">.$FechaBautismoFormateada.</span></p>
                        </div>

                        <div class="col-sm-6">
                            <p class="text-uppercase text-center fs-text-12">Se bautizó en esta Parroquia a:</p>
                        </div>

                        {{IF_SITUACION_PADRES_1}}
                        <!-- Padres casados | Unión Libre -->

                        <div class="col-sm-12">
                            <p class="text-center text-uppercase fw-600 mt-10-n ff-dreamwood main-color ls-4" id="nombreBebe-.$IdRegistro.">.$NombreBebe.</p>
                        </div>

                        <div class="col-sm-6">
                            <p class="text-uppercase text-center fs-text-12 mt-15-n">Nació el día: <span class="fw-600">.$FechaNacimientoFormateada.</span></p>
                        </div>

                        <div class="col-sm-6">
                            <p class="text-uppercase text-center fs-text-12 mt-15-n">En: <span class="fw-600">.$LugarNacimiento.</span></p>
                        </div>

                        <div class="col-sm-12">
                            <p class="text-uppercase fs-text-12 m-left-40 mt-15-n">Hij.$GeneroBebe. del Sr. .$NombrePadre. <span class="fw-600 ff-dreamwood main-color ls-4" id="apellidoPaterno_1-.$IdRegistro.">.$PrimerApellido.</span> .$SegundoApellidoP.</p>
                        </div>

                        <div class="col-sm-12">
                            <p class="text-uppercase fs-text-12 m-left-40 mt-25-n">Y de la Sra. .$NombreMadre. <span class="fw-600 ff-dreamwood main-color ls-4" id="apellidoMaterno_1-.$IdRegistro.">.$SegundoApellido.</span> .$SegundoApellidoM.</p>
                        </div>

                        {{ENDIF_SITUACION_PADRES_1}}


                        {{IF_SITUACION_PADRES_2}}
                        <!-- Padre Soltero -->

                        <div class="col-sm-12">
                            <p class="text-center text-uppercase fw-600 mt-10-n ff-dreamwood main-color ls-4" id="nombreBebe-.$IdRegistro.">.$NombreBebe.</p>
                        </div>

                        <div class="col-sm-6">
                            <p class="text-uppercase text-center fs-text-12 mt-15-n">Nació el día: <span class="fw-600">.$FechaNacimientoFormateada.</span></p>
                        </div>

                        <div class="col-sm-6">
                            <p class="text-uppercase text-center fs-text-12 mt-15-n">En: <span class="fw-600">.$LugarNacimiento.</span></p>
                        </div>

                        <div class="col-sm-12">
                            <p class="text-uppercase fs-text-12 m-left-40 mt-10-n">Hij.$GeneroBebe. del Sr. .$NombrePadre. <span class="fw-600 ff-dreamwood main-color ls-4" id="apellidoPaterno_1-.$IdRegistro.">.$PrimerApellido. .$SegundoApellido.</span></p>
                        </div>

                        <div class="col-sm-12 mb-3">
                            <p class="text-uppercase fs-text-12 m-left-40 mt-25-n">Y de la Sra. .$NombreMadre..$PrimerApellidoM..$SegundoApellidoM.</p>
                        </div>

                        {{ENDIF_SITUACION_PADRES_2}}


                        {{IF_SITUACION_PADRES_3}}
                        <!-- Madre Soltera -->

                        <div class="col-sm-12">
                            <p class="text-center text-uppercase fw-600 mt-10-n ff-dreamwood main-color ls-4" id="nombreBebe-.$IdRegistro.">.$NombreBebe.</p>
                        </div>

                        <div class="col-sm-6">
                            <p class="text-uppercase text-center fs-text-12 mt-15-n">Nació el día: <span class="fw-600">.$FechaNacimientoFormateada.</span></p>
                        </div>

                        <div class="col-sm-6">
                            <p class="text-uppercase text-center fs-text-12 mt-15-n">En: <span class="fw-600">.$LugarNacimiento.</span></p>
                        </div>

                        <div class="col-sm-12">
                            <p class="text-uppercase fs-text-12 m-left-40 mt-5-n">Hij.$GeneroBebe. del Sr. .$NombrePadre..$PrimerApellidoP..$SegundoApellidoP.</p>
                        </div>

                        <div class="col-sm-12">
                            <p class="text-uppercase fs-text-12 m-left-40 mt-15-n">Y de la Sra. .$NombreMadre. <span class="fw-600 ff-dreamwood main-color ls-4" id="apellidoMaterno_1-.$IdRegistro.">.$PrimerApellido. .$SegundoApellido.</span></p>
                        </div>

                        {{ENDIF_SITUACION_PADRES_3}}


                        {{IF_SITUACION_PADRES_4}}
                        <!-- Padres del mismo Sexo -->

                        <div class="col-sm-12">
                            <p class="text-center text-uppercase fw-600 mt-10-n ff-dreamwood main-color ls-4" id="nombreBebe-.$IdRegistro.">.$NombreBebe. .$PrimerApellido. .$SegundoApellido.</p>
                        </div>

                        <div class="col-sm-6">
                            <p class="text-uppercase text-center fs-text-12 mt-15-n">Nació el día: <span class="fw-600">.$FechaNacimientoFormateada.</span></p>
                        </div>

                        <div class="col-sm-6">
                            <p class="text-uppercase text-center fs-text-12 mt-15-n">En: <span class="fw-600">.$LugarNacimiento.</span></p>
                        </div>

                        <div class="col-sm-12">
                            <p class="text-uppercase fs-text-12 m-left-40">Fue presentad.$GeneroBebe. Por .$NombrePadre. .$PrimerApellidoP. .$SegundoApellidoP.</p>
                        </div>

                        <div class="col-sm-12 mb-4">
                            <p class="text-uppercase fs-text-12 m-left-40 mt-15-n">Y por .$NombreMadre. .$PrimerApellidoM. .$SegundoApellidoM.</p>
                        </div>

                        {{ENDIF_SITUACION_PADRES_4}}





                        {{IF_PADRINO_MADRINA}}
                            <div class="col-sm-12">
                                <p class="text-uppercase fs-text-12 m-left-40 mt-20-n">Fueron sus padrinos: El Sr. .$Padrino.</p>
                                <p class="text-uppercase fs-text-12 m-left-40 mt-20-n">Y la Sra. .$Madrina.</p>
                            </div>
                        {{ENDIF_PADRINO_MADRINA}}


                        {{IF_SOLO_PADRINO}}
                            <div class="col-sm-12">
                                <p class="text-uppercase fs-text-12 m-left-40 mt-20-n">Fue su padrino: El Sr. .$Padrino.</p>
                            </div>
                        {{ENDIF_SOLO_PADRINO}}


                        {{IF_SOLO_MADRINA}}
                            <div class="col-sm-12">
                                <p class="text-uppercase fs-text-12 m-left-40 mt-20-n">Fue su madrina: La Srta. .$Madrina.</p>
                            </div>
                        {{ENDIF_SOLO_MADRINA}}




                        <div class="col-sm-3">
                            <div class="tableHeader">
                                <p>Notas Marginales</p>
                            </div>
                            <div class="tableBody">
                                <p>.$NotasMarginales.</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="signatureLine mt-5"></div>
                            <p class="text-uppercase text-center" id="sacerdote-.$IdRegistro.">.$DataSacerdote.</p>
                            <p class="text-uppercase text-center mt-20-n" id="cargoSacerdote-.$IdRegistro.">.$DataCargoSacerdote.</p>
                        </div>

                        <div class="col-sm-3">
                            <div class="text-uppercase text-center" id="bautizante-.$IdRegistro."><span class="align-text-bottom">.$Bautizante.</span></div>
                            <div class="signatureLine"></div>
                            <p class="msg">El Bautizante</p>
                        </div>

                        <div class="col-sm-2">
                            <img class="qr-image mt-2" src=".$User_QR." alt="">
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <p class="text-uppercase text-center fs-text-10">.$DataDireccion.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{ENDIF_NO_CATECUMENO}}


     
	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </script>




  <script>
(function() {
    let styleRanges = {
        'diocesis': [
            { max: 20, size: 18, marginTop: 0 },
            { max: 30, size: 17, marginTop: 0 },
            { max: 40, size: 17, marginTop: 0 },
            { max: 50, size: 14, marginTop: 0 },
            { max: 60, size: 13, marginTop: 0, lineHeight: 1},
            { max: 70, size: 13, marginTop: 0, lineHeight: 1},
            { max: 80, size: 13, marginTop: 0, lineHeight: 1},
            { max: 90, size: 13, marginTop: 0, lineHeight: 1},
            { max: 100, size: 13, marginTop: 0, lineHeight: 1},
            { max: 124, size: 12, marginTop: 0, lineHeight: 1},
        ],
        'parroquia': [
            { max: 20, size: 16, marginTop: -20 },
            { max: 30, size: 15, marginTop: -20 },
            { max: 40, size: 15, marginTop: -20 },
            { max: 50, size: 13, marginTop: -20 },
            { max: 60, size: 12, marginTop: -12, lineHeight: 1 },
            { max: 70, size: 12, marginTop: -12, lineHeight: 1 },
            { max: 80, size: 12, marginTop: -12, lineHeight: 1 },
            { max: 90, size: 12, marginTop: -12, lineHeight: 1 },
            { max: 100, size: 12, marginTop: -12, lineHeight: 1 },
            { max: 124, size: 11, marginTop: -12, lineHeight: 1 }
        ],
        'vicaria': [
            { max: 20, size: 15, marginTop: -20 },
            { max: 30, size: 14, marginTop: -20 },
            { max: 40, size: 14, marginTop: -20 },
            { max: 50, size: 12, marginTop: -20 },
            { max: 60, size: 11, marginTop: -12, lineHeight: 1 },
            { max: 70, size: 10, marginTop: -12, lineHeight: 1 },
            { max: 80, size: 10, marginTop: -12, lineHeight: 1 },
            { max: 90, size: 10, marginTop: -12, lineHeight: 1 },
            { max: 100, size: 10, marginTop: -12, lineHeight: 1 },
            { max: 110, size: 10, marginTop: -12, lineHeight: 1 }
        ],
        'decanato': [
            { max: 20, size: 15, marginTop: -20 },
            { max: 30, size: 14, marginTop: -20 },
            { max: 40, size: 14, marginTop: -20 },
            { max: 50, size: 12, marginTop: -20 },
            { max: 60, size: 11, marginTop: -20 },
            { max: 70, size: 10, marginTop: -20 },
            { max: 80, size: 10, marginTop: -20 },
            { max: Infinity, size: 10, marginTop: -20 }
        ],
        'sacerdote': [
            { max: 30, size: 12 },
            { max: 40, size: 10 },
            { max: 50, size: 8 },
            { max: Infinity, size: 8 }
        ],
        'cargoSacerdote': [
            { max: 30, size: 12 },
            { max: 40, size: 10 },
            { max: 50, size: 8 },
            { max: Infinity, size: 8 }
        ],
        'bautizante': [
            { max: 30, size: 12 },
            { max: 40, size: 10 },
            { max: 50, size: 8 },
            { max: Infinity, size: 8 }
        ],
        'nombreBebe': [
            { max: 30, size: 25 },
            { max: 40, size: 20 },
            { max: 50, size: 15 },
            { max: Infinity, size: 10 }
        ],
        'apellidoPaterno_1': [
            { max: 30, size: 25 },
            { max: 40, size: 20 },
            { max: 50, size: 15 },
            { max: Infinity, size: 10 }
        ],
        'apellidoMaterno_1': [
            { max: 30, size: 25 },
            { max: 40, size: 20 },
            { max: 50, size: 15 },
            { max: Infinity, size: 10 }
        ]
    };

    

    function adjustStyles(element, elementClass) {
    if (element) {
        const text = element.textContent.trim();
        const charCount = text.length;
        
        const ranges = styleRanges[elementClass];
        if (ranges) {
            // Encontrar el rango exacto
            const selectedRange = ranges.find(range => charCount <= range.max);
            
            if (selectedRange) {
                if (selectedRange.size) {
                    element.style.fontSize = `${selectedRange.size}px`;
                }
                if (selectedRange.marginTop !== undefined) {
                    element.style.marginTop = `${selectedRange.marginTop}px`;
                }
                if (selectedRange.lineHeight !== undefined) {
                    element.style.lineHeight = selectedRange.lineHeight.toString();
                } else {
                    element.style.lineHeight = 'unset'; // Restablecer a normal si no está definido
                }
                
                console.log(`Aplicando estilos a ${elementClass}: charCount=${charCount}, estilos=`, selectedRange);
            } else {
                console.log(`No se encontró un rango para ${elementClass} con ${charCount} caracteres`);
                // Restablecer estilos a valores por defecto o eliminarlos
                element.style.fontSize = '';
                element.style.marginTop = '';
                element.style.lineHeight = 'unset';
            }
        }
    }
}

function adjustAllStyles() {
    const elementClasses = ['diocesis', 'parroquia', 'vicaria', 'decanato', 'sacerdote', 'cargoSacerdote', 'bautizante', 'nombreBebe', 'apellidoPaterno_1', 'apellidoMaterno_1'];
    
    elementClasses.forEach(className => {
        const elements = document.querySelectorAll(`[id^="${className}-"]`);
        elements.forEach(element => adjustStyles(element, className));
    });
}


    document.addEventListener('DOMContentLoaded', adjustAllStyles);
})();
</script>
</body>
</html>
