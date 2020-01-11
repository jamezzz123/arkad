<template>
    <div class="">
        <header class="header">
        <!-- <nav>
            <ul class="navigation">
                <li class="navigation__link active"><a href="/index.html">HOME</a></li>
                <li class="navigation__link ">SAVINGS</li>
                <li class="navigation__link">BUDGET</li>
            </ul>
        </nav> -->
        <div class="mast">
            <h1 class="mast__title container">ARKAD</h1>
            <h3  class="mast__text container">SIMPLE BUDGETING APP</h3>
            <div class="mast__buttons">
                <button class="button margin-sm" @click="excelExport">Export to EXL</button> 
                <!-- <button class="button button--pdf margin-sm">Export to PDF</button> -->
            </div>
            
        </div>
    </header> 
    </div>
</template>

<script>
    import {mapState} from 'vuex'
    export default {

        data() {
            return {
                
            }
        },

        computed: {
            ...mapState([
                'items'
            ])
        },

        methods: {
            excelExport(){

               axios({
                    url: './export',
                    method: 'POST',
                    responseType: 'blob',
                     data: {
                        data: this.items,
                    }
                }).then((response) => {
                     var fileURL = window.URL.createObjectURL(new Blob([response.data]));
                     var fileLink = document.createElement('a');
   
                     fileLink.href = fileURL;
                     fileLink.setAttribute('download', 'file.xlsx');
                     document.body.appendChild(fileLink);
   
                     fileLink.click();
                     
                });

            }
        
        },


      




    }
</script>
