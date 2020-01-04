<template>
      <div class="widget shadow" :class="{backgroundBlur:visible}">
            <div class="widget__header">
                <h3 class="widget__header__item">Item</h3>
                <h3 class="widget__header__item">Amount</h3>
                <h3 class="widget__header__item">Percentage</h3>
                <h3 class="widget__header__item"></h3>
            </div>

             
           
            <transition-group tag="div" name="list"> 
                <div class="widget__list"  v-for="(item,index) in items" :key="item.item">
                <h4 class="widget__list__item">{{item.item }}</h4>
                <h4 class="widget__list__item">{{item.amount }}</h4>
                <h4 class="widget__list__item">{{item.percentage }}</h4>
               <a v-if="!(index == 0)" herf="" class="widget__list__item widget__list__item__remove" @click="remove(index)">remove</a>
          </div>
          </transition-group>  
          
            
            
            <widget-form></widget-form>
        </div>
</template>

<script>
import {mapState,mapActions} from 'vuex'

    export default {
        props:{
            visible:Boolean
        },


        computed: {
            ...mapState([
                'items'
            ])
        },

        methods: {
            ...mapActions([
                'removeItem'
            ]),

            remove(id){
                this.removeItem(id);
            }
        },

    }
</script>

<style>
.list-enter-active,
.list-leave-active,
.list-move {
  transition: 500ms cubic-bezier(0.59, 0.12, 0.34, 0.95);
  transition-property: opacity, transform;
}

.list-enter {
  opacity: 0;
  transform: translateX(50px) scaleY(0.5);
}

.list-enter-to {
  opacity: 1;
  transform: translateX(0) scaleY(1);
}

.list-leave-active {
  position: absolute;
}

.list-leave-to {
  opacity: 0;
  transform: scaleY(0);
  transform-origin: center top;
}
    
</style>
