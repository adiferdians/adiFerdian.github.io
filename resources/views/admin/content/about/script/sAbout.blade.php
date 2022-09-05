<script>
    $(document).ready(function () {

    });

    // edit about
    const edit = document.getElementById("edit");
    edit.addEventListener('click', function () {
        $("#myModal").modal();
    });

    // delete about
    const del = document.getElementById("delete");
    del.addEventListener('click', function () {
        Swal.fire({
            title: 'Yakin Oraaa?',
            text: "Raiso di balekke nek wis dihapus lho!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })
    });

    // send about
    const subAbout = document.getElementById("submitAbout");
    subAbout.addEventListener('click', function subAbouts() {
        const about = document.getElementById("about").value;
        const proffession = document.getElementById("proff").value;
        const id = document.getElementById("id").value;


        axios.post('api/about/submit/' + id, {
            about,
            proffession
        }).then((response) => {
            Swal.fire({
                title: 'Success...',
                text: 'Sukses mengubah  data',
                type: 'success',
                confirmButtonText: 'Ok'
            }).then((result) => {
                if (result.value) {
                    location.reload();
                }
            })
        }).catch((error) => {
            Swal.fire({
                title: 'Oops...',
                text: 'Something went wrong',
                type: 'error',
                confirmButtonText: 'Ok'
            })
        })
    })

    // add detil 
    document.getElementById("addDetil").addEventListener('click', function addDetil() {
        $("#myModalDetil").modal();
    })

    document.getElementById("sentDetil").addEventListener('click', function addDetil() {
        const name = document.getElementById("name").value;
        const desc = document.getElementById("desc").value;

        document.getElementById("name").value='';
        document.getElementById("desc").value='';
        document.getElementById("idDetil").value='';

        axios.post('api/about/sentDetil', {
            name,
            desc
        }).then((response) => {
            Swal.fire({
                title: 'Success...',
                text: 'Sukses Menambah  Data!',
                type: 'success',
                confirmButtonText: 'Ok'
            }).then((result) => {
                if (result.value) {
                    location.reload();
                }
            })
        }).catch((error) => {
            Swal.fire({
                title: 'Oops...',
                text: 'Something went wrong',
                type: 'error',
                confirmButtonText: 'Ok'
            })
        })
    })

    // $(document).on("click", '#editDetil', function(title, desc) {
    //     $("#myModalDetil").modal();
    //     const id = $(this).data('id');
    //     // const title = $(this).data('title');
    //     // console.log(title);
    //     $(".modal-body #idDetil").val(id);
    //     // $(".modal-body #desc").val(title);
    // })

    function editDetil(id, title, desc) {
        $("#myModalDetil").modal();
        console.log(id, title, desc);
        $(".modal-body #idDetil").val(id);
        $(".modal-body #name").val(title);
        $(".modal-body #desc").val(desc);
    }

    $(document).on("click", '#deleteDetil', function deleteDetil() {
        const id = $(this).data('id');

        Swal.fire({
            title: 'Yakin Oraaa?',
            text: "Raiso di balekke nek wis dihapus lho!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
            axios.post('api/about/delDetil', {
                id
            }).then((response) => {
                Swal.fire({
                    title: 'Success...',
                    text: 'Sukses Menghapus  Data!',
                    type: 'success',
                    confirmButtonText: 'Ok'
                }).then((result) => {
                    if (result.value) {
                        location.reload();
                    }
                })
            }).catch((error) => {
                Swal.fire({
                    title: 'Oops...',
                    text: 'Something went wrong',
                    type: 'error',
                    confirmButtonText: 'Ok'
                })
            })
                // Swal.fire(
                //     'Deleted!',
                //     'Your file has been deleted.',
                //     'success'
                // )
            }
        })
    })


</script>
