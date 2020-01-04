<template>
    <div class="">
        <header class="header">
        <nav>
            <ul class="navigation">
                <li class="navigation__link active"><a href="/index.html">HOME</a></li>
                <li class="navigation__link ">SAVINGS</li>
                <li class="navigation__link">BUDGET</li>
            </ul>
        </nav>
        <div class="mast">
            <h1 class="mast__title container">Arkad</h1>
            <p  class="mast__text container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim consectetur maxime iste ab esse, reiciendis iusto laboriosam? Amet minima numquam cum voluptatibus. Distinctio, fugit placeat beatae facilis animi natus maiores.</p>
            <div class="mast__buttons">
                <button class="button margin-sm">Export to EXL</button> 
                <button class="button button--pdf margin-sm">Export to PDF</button>
            </div>
            
        </div>
    </header> 
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
