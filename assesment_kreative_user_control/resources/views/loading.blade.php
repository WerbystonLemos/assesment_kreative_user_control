{{--
 - sempre opto por criar as telas de
 - loading com seu hmtl, js e css
 - para concetrar toda renderizacao num
 - unico script e usa-lo como componente
 - necesitando apenas de uma funcao para
 - exibir e outra para ocutar
 -
 - INSTRUCOES DE USO
 -
 - 1º na view add no topo a chamada a este script com @extends('loading')
 - 2º no js adequado exiba-o com a funcao showLoading()
 - 3º no js adequado omita-o com a funcao hideLoading()
--}}

<script>
    function showLoading()
    {
        $("#contianer_loading").css('display', 'flex');
    }

    function hideLoading()
    {
        $("#contianer_loading").css('display', 'none');
    }
</script>

<style>
    #contianer_loading
    {
        width: 100vw;
        height:100vh;
        border: 1px solid red;
        display:none;
        align-items:center;
        justify-content:center;
        flex-direction: column;
        z-index:99999;
        position:absolute;
        top: 0;
        background: #fff;
    }
    #contianer_loading img
    {
        width: 100px;
    }
</style>

<div id="contianer_loading">
    <h2>Carregando</h2>
    <img src="{{asset('images/loading.gif')}}" alt="">
</div>
