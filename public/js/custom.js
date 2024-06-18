// function confirmDeleteAcm(event, id_acm) {
//     event.preventDefault();
//     Swal.fire({
//         title: 'Excluir',
//         text: 'Confirmar exclusão?',
//         icon: 'warning',
//         showCancelButton: true,
//         confirmButtonColor: '#d33',
//         cancelButtonColor: '#0d6efd',
//         confirmButtonText: 'Sim, deletar!',
//         cancelButtonText: 'Cancelar'
//     }).then((result) => {
//         if (result.isConfirmed) {
//             document.getElementById(`delete-form-${id_acm}`).submit();
//         }
//     });
// }