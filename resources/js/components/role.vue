<template>
    <div class="container">
        <h1>pallav</h1>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                permissions:[]
            }
        },
       methods:{
            getPermissions(){
                axios.get("http://localhost:8000/getAllPermission")
                .then((response)=>{
                    console.log(response.data.permissions);
                    this.permissions = response.data.permissions
                }).catch(()=>{
                    swal.fire({
                      icon: 'error',
                      title: 'Oops...',
                      text: 'Something went wrong!',
                      // footer: '<a href>Why do I have this issue?</a>'
                  })
                });
            }
       },
       created(){
            this.getPermissions();
       }

    }
</script>