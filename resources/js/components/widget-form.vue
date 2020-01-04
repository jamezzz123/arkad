<template>
            <div class="widget__form">
                <input class="widget__form__input"  :disabled="disableAddButton" placeholder="Enter item..." v-model="item"/>
                <input class="widget__form__input"   :disabled="disableAddButton" type="number" placeholder="Enter Amout.." v-model.number="amount" /> 
                <input class="widget__form__input widget__form__input--percentage" :disabled="disableAddButton" readonly v-model="percentage" />
               <button class="button widget__form__button" :disabled="disableAddButton" @click="validate">add+</button>
            </div>
            
</template>

<script>
    import {mapActions,mapState} from 'vuex'
    export default {

     data() {
         return {
             
                item:'',
                amount:'',
                percentage:0,
                errorTaps:true,
             
            
         }
     }, 
     methods: {
         ...mapActions([
             'addItem'
         ])
         ,
         addItems(){

             const payload= {
                 item:this.item,
                 amount:this.amount,
                 percentage:this.percentage,
             }
                 this.addItem(payload);
                this.reset();
         },
         reset(){
             this.item='';
             this.amount='';
             this.percentage='';
         },
         validate(){
             this.errorTaps = true;
             if(!this.item.length > 0){
                 this.errorTaps= false;
                 toastr["error"]('item is required');
             }
             if(!(this.amount >0)){
                 this.errorTaps= false;
                toastr["error"]('amount is required');
                
             }

             if(!Number(this.amount)){
                 this.errorTaps= false;
                toastr["error"]('amount must be a number');
                
             }

             if(!this.validateIncome()){
                 this.errorTaps= false;
                toastr["error"]('amount must be a less or equal to '+(this.income - _.sumBy(this.items,'amount')));
             }

            if(this.errorTaps == true){
                this.addItems();
            }
       
        },
        validateIncome(){
         return this.amount <= (this.income - _.sumBy(this.items,'amount')) ? true:false
        }

     }, 
     computed: {
         ...mapState([
             'income',
             'items'
         ]),
         disableAddButton(){
             if (this.income - _.sumBy(this.items,'amount') == 0 ) {
                 return true;
             }else{
                 return false
             }
         }
       
     },
     watch: {
         amount(){
             this.percentage = (this.amount*100)/this.income +"%";
         },

     },

    }
</script>
