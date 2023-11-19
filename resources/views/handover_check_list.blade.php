@extends('layouts.app')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Handover Check List</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery.inputLettering.js') }}"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="p-4">
    <div class="container">
        <div class="row">
            <div class="col-9 p-0">
                <h1 class="fs-2 text-end fw-bold m-0">Handover Check List <span class="fs-5">Lista de verificación de entrega</span></h1>
            </div>
            <div class="col-3 p-0 text-end align-self-center">
            <img src="{{ asset('img/geely.png') }}" class="w-50" alt="Geely">
            </div>
        </div>
    </div>
    <br>
    <div class="container border border-dark">
        <div class="row bg-secondary d-flex align-items-stretch">
            <div class="col-md-3 border border-dark d-flex align-items-center">
                <p class="text-center text-white m-0 w-100">Company/(compañia)</p>
            </div>
            <div class="col-md-3 border border-dark d-flex align-items-center">
                <p class="text-center text-white m-0 w-100">Vehicle identification number (VIN) Chasis</p>
            </div>
            <div class="col-md-3 border border-dark d-flex align-items-center">
                <p class="text-center text-white m-0 w-100">Inspection date Fecha</p>
            </div>
            <div class="col-md-3 border border-dark d-flex align-items-center">
                <p class="text-center text-white m-0 w-100">R.O#</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 p-0 border border-dark">
                <input type="text" class="form-control border-0 rounded-0 text-center " id="" placeholder="">
            </div>
            <div class="col-md-3 p-0 border border-dark">
                <input type="text" class="form-control border-0 rounded-0 text-center " id="" placeholder="">
            </div>
            <div class="col-md-3 p-0 border border-dark">
                <input type="date" class="form-control border-0 rounded-0" id="" placeholder="">
            </div>
            <div class="col-md-3 p-0 border border-dark">
                <input type="text" class="form-control border-0 rounded-0 text-center " id="" placeholder="">
            </div>
        </div>
        <div class="row">
            <div class="col-12 border border-dark">
                <p>*Company: distributor, insurance company, shipping agent, etc. Empresa: distribuidor, compañía de seguros, agente marítimo, etc.</p>
                <p>🞛External inspection Inspección externa</p>
                <p>► Circle the part of vehicle that has problem or defect. Encierre en un círculo la parte del vehículo que tiene el problema o defecto.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 border border-dark text-center">
                <p><b>Sedan</b></p>
                <img src="{{ asset('img/sedan.png') }}" alt="Sedan">
            </div>
            <div class="col-12 col-sm-6 border border-dark text-center">
                <p><b>SUV</b></p>
                <img src="{{ asset('img/suv.png') }}" alt="SUV">
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-12">
                <label for="" class="form-label">► Describe each problem or defect, and indicate the completion state on the right side after parts replacement or repair. Describa cada problema o defecto e indique el estado de finalización en el lado derecho después del reemplazo o reparación de piezas</label>
            </div>
            <div class="col-6">
                <div class="input-group mb-1">
                    <span class="input-group-text bg-transparent border-0 ps-0" id="">1) </span>
                    <input type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark" placeholder="" aria-label="" aria-describedby="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text bg-transparent border-0 ps-0" id="">2) </span>
                    <input type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark" placeholder="" aria-label="" aria-describedby="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text bg-transparent border-0 ps-0" id="">3) </span>
                    <input type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark" placeholder="" aria-label="" aria-describedby="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text bg-transparent border-0 ps-0" id="">4) </span>
                    <input type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark" placeholder="" aria-label="" aria-describedby="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text bg-transparent border-0 ps-0" id="">5) </span>
                    <input type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark" placeholder="" aria-label="" aria-describedby="">
                </div>
            </div>
            <div class="col-6">
                <div class="input-group mb-1">
                    <span class="input-group-text bg-transparent border-0 ps-0" id="">6) </span>
                    <input type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark" placeholder="" aria-label="" aria-describedby="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text bg-transparent border-0 ps-0" id="">7) </span>
                    <input type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark" placeholder="" aria-label="" aria-describedby="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text bg-transparent border-0 ps-0" id="">8) </span>
                    <input type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark" placeholder="" aria-label="" aria-describedby="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text bg-transparent border-0 ps-0" id="">9) </span>
                    <input type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark" placeholder="" aria-label="" aria-describedby="">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text bg-transparent border-0 ps-0" id="">10) </span>
                    <input type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark" placeholder="" aria-label="" aria-describedby="">
                </div>
            </div>
            <div class="col-12">
                <p>🞛Inspection of vehicle-mounted parts Inspección de piezas montadas en vehículos</p>
            </div>
            <div class="col-12 mb-3">
                <label for="" class="form-label">► Write down the items that new cars should have had but are missing. Anote los artículos que deberían haber tenido los autos nuevos pero faltan</label>
                <textarea class="form-control rounded-0 border border-dark" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="col-12 mb-4">
                <p>※ Vehicle-mounted parts (vary with vehicle type and optional item) Piezas montadas en el vehículo (varían según el tipo de vehículo y el artículo opcional)</p>
                <p>Owner’s Manual, tool kit, cigarette lighter, jack, remote controller, spare wheel, etc. Manual de instrucciones, juego de herramientas, encendedor, gato, mando a distancia, rueda de repuesto, etc.</p>
            </div>
            <div class="col-6">
                <center>
                    <input type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark mb-2 text-center w-75" placeholder="" aria-label="" aria-describedby="">
                    <p class="form-label">Signature of inspector</p>
                </center>
            </div>
            <div class="col-6">
                <center>
                    <input type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark mb-2 text-center w-75" placeholder="" aria-label="" aria-describedby="">
                    <p class="form-label">Signature of distributor</p>
                </center>
            </div>
        </div>
    </div>
    <br>
    <div class="container border border-dark">
        <div class="row border border-dark">
            <div class="col-6 d-flex align-items-center">
                <img src="{{ asset('img/geely.png') }}" class="w-25" alt="Geely">
            </div>
            <div class="col-6">
                <div class="input-group">
                    <span class="input-group-text bg-transparent border-0 ps-0" id="">Waybill No.: </span>
                    <input type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0 border-dark" placeholder="" aria-label="" aria-describedby="">
                </div>
                <div class="input-group">
                    <span class="input-group-text bg-transparent border-0 ps-0" id="">(BOL).: </span>
                    <input type="text" class="form-control rounded-0 border-0" placeholder="" aria-label="" aria-describedby="">
                </div>
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center">
                <div class="input-group d-block">
                    <span class="input-group-text p-0 bg-transparent border-0" id="basic-addon1">No.</span>
                    <input type="text" class="form-control w-100 ps-0 border-0 rounded-0" placeholder="1" aria-label="" aria-describedby="">
                </div>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center">
                <div class="input-group d-block">
                    <span class="input-group-text p-0 bg-transparent border-0" id="basic-addon1">Model</span>
                    <input type="text" class="form-control w-100 ps-0 border-0 rounded-0" placeholder="--" aria-label="" aria-describedby="">
                </div>
            </div>
            <div class="col-2 border-start border-end border-dark d-flex align-items-center">
                <div class="input-group d-block">
                    <span class="input-group-text p-0 bg-transparent border-0" id="">Configuration</span>
                    <select class="form-select ps-0 pe-0 border-0 rounded-0 w-100" id="">
                        <option selected>Choose...</option>
                        <option value="1">Manual</option>
                        <option value="2">Automatic</option>
                    </select>
                </div>
            </div>
            <div class="col-8 border-start border-dark d-flex align-items-center p-0">
                <p class="text-center m-0 w-100">VIN</p>
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-4 border-end border-dark d-flex align-items-center pe-0">
                <div class="input-group">
                    <span class="input-group-text bg-transparent border-0 ps-0" id="">Kilometraje (Km)</span>
                    <input type="number" class="form-control rounded-0 border-0 border-start border-dark" placeholder="" aria-label="" aria-describedby="">
                </div>
            </div>
            <div class="col-8 border-start border-dark d-flex align-items-center p-0" id="phoneInput">
                <div class="input-group h-100">
                    <input type="text" class="form-control border-0 p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                    <input type="text" class="form-control border-start border-top-0 border-bottom-0 border-end-0 border-dark p-0 text-center letter" placeholder="" aria-label="" maxlength="1">
                </div>
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-6 border-end border-dark pt-3 pb-3">
                <img src="{{ asset('img/partes.png') }}" class="img-fluid" alt="Partes del Auto">
            </div>
            <div class="col-6 border-start border-dark d-flex align-items-center">
                <div>
                    <p>Necessities for vehicle Necesidades para vehiculo</p>
                    <ol type="A" class="ps-4">
                        <li>Emergency stop sign Señal de parada de emergencia</li>
                        <li>Jack Gato</li>
                        <li>Tow hook Gancho de remolque</li>
                        <li>Driver's tools herramientas del conductor</li>
                        <li>Spare wheel Rueda de repuesto</li>
                        <li>Ignition key Llave de ignición</li>
                        <li>Other Otros</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-12 col-md-3 border-end border-dark">
                <p class="m-0">Inspection point<br>Puntos de inspeccion</p>
            </div>
            <div class="col-12 col-md-3 border-start border-end border-dark">
                <p class="m-0">Distributor inspection<br>Inspección del distribuidor</p>
            </div>
            <div class="col-12 col-md-3 border-start border-end border-dark">
                <p class="m-0">Transporter inspection<br>Inspección del transportista</p>
            </div>
            <div class="col-12 col-md-3 border-start border-dark">
                <p class="m-0">Dealer inspection<br>Inspeccion del distribuidor</p>
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-12 col-md-3 border-end border-dark d-flex align-items-center">
                <p class="m-0 lh-sm">Defect No.</p>
            </div>
            <div class="col-12 col-md-9 border-start border-dark">
                <div class="row">
                    <div class="col-1 border-end border-dark d-flex align-items-center p-1 text-center">
                        <p class="m-0 lh-sm">Vehicle No</p>
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                        <p class="m-0 lh-sm">Defect location ubicacion del defecto</p>
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                        <p class="m-0 lh-sm">Defect code código del defecto</p>
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                        <p class="m-0 lh-sm">Defect degree and damage area grado del defecto y area del daño</p>
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                        <p class="m-0 lh-sm">Vehicle No</p>
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                        <p class="m-0 lh-sm">Defect location</p>
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                        <p class="m-0 lh-sm">Defect code</p>
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                        <p class="m-0 lh-sm">Defect degree and damage area</p>
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                        <p class="m-0 lh-sm">Vehicle No</p>
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                        <p class="m-0 lh-sm">Defect location</p>
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark d-flex align-items-center p-1 text-center">
                        <p class="m-0 lh-sm">Defect code</p>
                    </div>
                    <div class="col-1 border-start border-dark d-flex align-items-center p-1 text-center">
                        <p class="m-0 lh-sm">Defect degree and damage area</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-12 col-md-3 border-end border-dark d-flex align-items-center">
                <p class="m-0 lh-sm">A - Wear</p>
            </div>
            <div class="col-12 col-md-9 border-start border-dark">
                <div class="row">
                    <div class="col-1 border-end border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-start border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-12 col-md-3 border-end border-dark d-flex align-items-center">
                <p class="m-0 lh-sm">B – Damage Daño</p>
            </div>
            <div class="col-12 col-md-9 border-start border-dark">
                <div class="row">
                    <div class="col-1 border-end border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-12 col-md-3 border-end border-dark d-flex align-items-center">
                <p class="m-0 lh-sm">C – Notch muesca/corte</p>
            </div>
            <div class="col-12 col-md-9 border-start border-dark">
                <div class="row">
                    <div class="col-1 border-end border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-12 col-md-3 border-end border-dark d-flex align-items-center">
                <p class="m-0 lh-sm">D – Pit picadura</p>
            </div>
            <div class="col-12 col-md-9 border-start border-dark">
                <div class="row">
                    <div class="col-1 border-end border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-12 col-md-3 border-end border-dark d-flex align-items-center">
                <p class="m-0 lh-sm">G - Glass damage daño en vidrios</p>
            </div>
            <div class="col-12 col-md-9 border-start border-dark">
                <div class="row">
                    <div class="col-1 border-end border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-12 col-md-3 border-end border-dark d-flex align-items-center">
                <p class="m-0 lh-sm">I - Body corrosion corrosión en carrocería</p>
            </div>
            <div class="col-12 col-md-9 border-start border-dark">
                <div class="row">
                    <div class="col-1 border-end border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-12 col-md-3 border-end border-dark d-flex align-items-center">
                <p class="m-0 lh-sm">M - Missing parts partes faltantes</p>
            </div>
            <div class="col-12 col-md-9 border-start border-dark">
                <div class="row">
                    <div class="col-1 border-end border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-12 col-md-3 border-end border-dark d-flex align-items-center">
                <p class="m-0 lh-sm">S – Scratch rayas o rasguños</p>
            </div>
            <div class="col-12 col-md-9 border-start border-dark">
                <div class="row">
                    <div class="col-1 border-end border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-12 col-md-3 border-end border-dark d-flex align-items-center">
                <p class="m-0 lh-sm">Remarks Observaciones</p>
            </div>
            <div class="col-12 col-md-9 border-start border-dark">
                <div class="row">
                    <div class="col-1 border-end border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-end border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                    <div class="col-1 border-start border-dark d-flex align-items-center pt-2 pb-2 text-center">
                        <input class="form-check-input rounded-0 border-0 w-100 mt-0" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-12 col-md-3 border-end border-dark d-flex align-items-center text-center">
                <p class="m-0 text-start lh-sm">Confirmed by delivery side:<br>Confirmado por la parte que entrega<br>Signature firma:</p>
            </div>
            <div class="col-12 col-md-9 border-start border-dark d-flex align-items-center text-center p-0">
                <input type="text" class="form-control rounded-0 border-0 h-100" id="" placeholder="">
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-12 col-md-3 border-end border-dark d-flex align-items-center text-center">
                <p class="m-0 text-start lh-sm">Confirmed by receiving party:<br>Confirmado por la parte que recibe<br>Signature firma:</p>
            </div>
            <div class="col-12 col-md-9 border-start border-dark d-flex align-items-center text-center p-0">
                <input type="text" class="form-control rounded-0 border-0 h-100" id="" placeholder="">
            </div>
        </div>
        <div class="row border border-dark">
            <div class="col-12 col-md-3 border-end border-dark d-flex align-items-center text-center">
                <p class="m-0 text-start lh-sm">Inspection date fecha de inspección</p>
            </div>
            <div class="col-12 col-md-9 border-start border-dark d-flex align-items-center text-center p-0">
                <input type="date" class="form-control rounded-0 border-0 h-100" id="" placeholder="">
            </div>
        </div>
    </div> 
    <br>
    <div class="container">
        <div class="row border-bottom border-dark">
            <div class="col-12 p-0">
                <p class="fw-bold">Damage location code: codigo de ubicación del daño</p>
            </div>
        </div>
    </div>
    <div class="container border border-dark">
        <!-- 1 - 22 - 42  -->
        <div class="row border border-top-0 border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">1</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front bumper LH defensa delantera lado izquierdo</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">22</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear lamp LH lámpara trasera izquierda</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">42</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front bumper RH defense delantera lado derecho</p>
            </div>
        </div>
        <!-- 2 - 23 - 43  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">2</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front spoiler LH moldura delantera lado izquierdo</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">23</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear lamp RH lámpara trasera derecha</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">43</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front spoiler RH moldura delantera lado derecho</p>
            </div>
        </div>
        <!-- 3 - 24 - 44  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">3</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front wing LH guardafango delatero izquierdo</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">24</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear door/boot door puerta del maletero</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">44</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front spoiler spoiler delantero</p>
            </div>
        </div>
        <!-- 4 - 25 - 45  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">4</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front wheel arch LH pollera delantera izquierda</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">25</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear glass vidrio trasero</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">45</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front bumper defense delantera</p>
            </div>
        </div>
        <!-- 5 - 26 - 46  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">5</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front rim LH rin delantero izquierdo</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">26</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear spoiler RH moldura trasera derecha</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">46</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front lamp LH and left steering lamp luz delantera y luz direccional izquierda</p>
            </div>
        </div>
        <!-- 6 - 27 - 47  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">6</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front tire LH llanta delantera izquierda</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">27</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear bumper RH defense trasera lado derecho</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">47</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front lamp RH and right steering lamp luz delantera y luz direccional derecha</p>
            </div>
        </div>
        <!-- 7 - 28 - 48  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">7</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Left rearview retrovisor izquierdo</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">28</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear panel RH guardafango trasero derecho</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">48</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Searchlight (if installed) Reflector (si está instalado)</p>
            </div>
        </div>
        <!-- 8 - 29 - 49  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">8</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Body carrocería</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">29</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Fuel tank cap and frame tapa de combustible</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">49</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front grill parrilla delantera</p>
            </div>
        </div>
        <!-- 9 - 30 - 50  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">9</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front door LH puerta delantera izquierda</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">30</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear wheel arch RH pollera trasera derecha</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">50</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Engine bonnet tapa o capo del motor</p>
            </div>
        </div>
        <!-- 10 - 31 - 51  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">10</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front door sill LH moldura de la puerta delantera izquierda</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">31</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear rim RH rin trasero derecho</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">51</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front panel panel frontal</p>
            </div>
        </div>
        <!-- 11 - 32 - 52  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">11</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear door LH (B post only for four-door car) puerta trasera izquierda</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">32</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear tire RH llanta trasera derecha</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">52</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Wiper limpiaparabrisas</p>
            </div>
        </div>
        <!-- 12 - 33 - 53  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">12</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear door sill LH moldura de la puerta trasera izquierda</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">33</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear door RH (B post only for four-door car) puerta trasera derecha</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">53</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Windshield and A post parabrisas y poste</p>
            </div>
        </div>
        <!-- 13 - 34 - 54  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">13</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear wheel arch LH pollera trasera izquierda</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">34</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear door sill RH moldura de la puerta tarsera derecha</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">54</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Headlining (or sunroof if installed) Revestimiento del techo (o techo corredizo si está instalado)</p>
            </div>
        </div>
        <!-- 14 - 35 - 55 fbdfbdf -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">14</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear rim LH rin trasero izquierdo</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">35</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front door RH puerta delantera derecha</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">55</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Spare wheel llanta de repuesto</p>
            </div>
        </div>
        <!-- 15 - 36 - 56  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">15</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear tire LH llanta trasera izquierda</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">36</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front door sill RH moldura de la puerta delantera derecha</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">56</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Tools and fittings Herramientas y accesorios</p>
            </div>
        </div>
        <!-- 16 - 37 - 57  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">16</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear wing LH guardafango trasero izquierdo</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">37</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Right rearview retrovisor derecho</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">57</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Radio</p>
            </div>
        </div>
        <!-- 17 - 38 - 58  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">17</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear bumper LH defense trasera lado izquierdo</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">38</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front wheel arch RH pollera delantera derecha</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">58</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Battery Batería</p>
            </div>
        </div>
        <!-- 18 - 39 - 59  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">18</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear spoiler LH moldura trasera izquierda</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">39</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front wing RH guardafango delantero derecho</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">59</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Key Llaves</p>
            </div>
        </div>
        <!-- 19 - 40 - 60  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">19</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear tail moldura trasera</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">40</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front rim RH rin delantero derecho</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">60</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Body bottom and exhaust pipe parte inferior del auto, tubo de escape</p>
            </div>
        </div>
        <!-- 20 - 41 - 61  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">20</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rear bumper defense trasera</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">41</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Front tire RH llanta delantera derecha</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">61</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
                <p class="lh-base m-0">Rest parts resto de partes del auto</p>
            </div>
        </div>
        <!-- 21 - 42 - 62  -->
        <div class="row border border-dark">
            <div class="col-1 border-end border-dark d-flex align-items-center p-3 text-center">
                <div class="position-relative d-flex align-items-center w-100 h-100">
                    <p class="m-0 align-self-center text-center w-100 lh-sm">21</p>
                    <div class="position-absolute top-50 start-50 translate-middle w-100">
                        <input class="form-check-input rounded-circle border-dark w-50 mt-0 check-r" type="checkbox" value="" id="">
                    </div>
                </div>
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
                <p class="lh-base m-0">Back door trim board Tablero de moldura de la puerta trasera</p>
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
            </div>
            <div class="col-3 border-start border-end border-dark d-flex align-items-center">
            </div>
            <div class="col-1 border-start border-end border-dark d-flex align-items-center p-3 text-center">
            </div>
            <div class="col-3 border-start border-dark d-flex align-items-center">
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12 p-0">
                <p class="fw-bold">Damage code:</p>
            </div>
        </div>
    </div>
    <div class="container border border-dark">
        <div class="row border-start border-end border-dark">
            <div class="col-1 border border-start-0 border-dark">
                <p class="m-0">1. </p>
            </div>
            <div class="col-11 border border-end-0 border-dark">
                <p class="m-0">General defect Defecto general</p>
            </div>
            <div class="col-1 border border-start-0 border-dark">
                <p class="m-0">2. </p>
            </div>
            <div class="col-11 border border-end-0 border-dark">
                <p class="m-0">Scratch and pit (paint repair) rayas y picadas (reparación de pintura)</p>
            </div>
            <div class="col-1 border border-start-0 border-dark">
                <p class="m-0">3. </p>
            </div>
            <div class="col-11 border border-end-0 border-dark">
                <p class="m-0">Panel replacement (not inferior to production quality) Reemplazo del panel (no inferior a la calidad de producción)</p>
            </div>
            <div class="col-1 border border-start-0 border-dark">
                <p class="m-0">4. </p>
            </div>
            <div class="col-11 border border-end-0 border-dark">
                <p class="m-0">Below standard Por debajo del estándar</p>
            </div>
            <div class="col-1 border border-start-0 border-dark">
                <p class="m-0">5. </p>
            </div>
            <div class="col-11 border border-end-0 border-dark">
                <p class="m-0">Scrapping desechar, desmantelar</p>
            </div>
        </div>
    </div>

    <style>
        input[type="checkbox"] {
            min-height: 30px;
        }
        .check-r {
            background: transparent
        }
        .check-r:checked[type=checkbox] {
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
    <script type="text/javascript">
        $('#phoneInput').letteringInput({
            forbiddenKeyCodes: [ 9, 16, 17, 18, 20, 27, 32, 33, 34, 38, 40, 45, 144 ]
        });
        $('#phoneInput').letteringInput({
            inputClass: 'letter',
            onFocusLetter: function() {},
            onBlurLetter: function() {},
            onLetterKeyup: function($item, event) {},
            onSet: function($el, event, value) {}
        });
    </script>

</body>
</html>