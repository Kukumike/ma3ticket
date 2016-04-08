/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



//initialze datepicker
$('.datepicker').datepicker();
var nowTemp = new Date();
var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

var checkin = $('#dpd1').datepicker({
    onRender: function (date) {
        return date.valueOf() < now.valueOf() ? 'disabled' : '';
    }
}).on('changeDate', function (ev) {
    if (ev.date.valueOf() > checkout.date.valueOf()) {
        var newDate = new Date(ev.date);
        newDate.setDate(newDate.getDate() + 1);
        checkout.setValue(newDate);
    }
    checkin.hide();
    $('#dpd2')[0].focus();
}).data('datepicker');
var checkout = $('#dpd2').datepicker({
    onRender: function (date) {
        return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
    }
}).on('changeDate', function (ev) {
    checkout.hide();
}).data('datepicker');

var checkin = $('#patientDOB').datepicker({
    onRender: function (date) {
        return date.valueOf() < now.valueOf() ? 'enabled' : '';
    }
}).on('changeDate', function (ev) {
    if (ev.date.valueOf() > checkout.date.valueOf()) {
        var newDate = new Date(ev.date);
        newDate.setDate(newDate.getDate() + 1);
        checkout.setValue(newDate);
    }
    checkin.hide();
    $('#patientDOB')[0].focus();
}).data('datepicker');

