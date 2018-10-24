$('#remove').click(function () {
    iziToast.question({
    timeout: false,
    close: true,
    overlay: true,
    displayMode: 'once',
    id: 'question',
    zindex: 999,
    title: 'Hey',
    message: 'Are you sure you want to delete?',
    position: 'center',
    buttons: [
        ['<button><b>YES</b></button>', function (instance, toast) {
 
            instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
 
        }, true],
        ['<button>NO</button>', function (instance, toast) {
 
            instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
 
        }],
    ],
    onClosing: function(instance, toast, closedBy){
        console.info('Closing | closedBy: ' + closedBy);
    },
    onClosed: function(instance, toast, closedBy){
        console.info('Closed | closedBy: ' + closedBy);
    }
});
});

$('#update').click(function () {
iziToast.success({
    title: 'Updated',
    message: 'Successfully',
    timeout: 3000
});
});

$('#addrecord').click(function () {
iziToast.success({
    title: 'Added',
    message: 'Successfully',
    timeout: 3000,
});
});