<template>
    <div>
        <div class="container mx-auto flex flex-row flex-wrap"> 
            <div class="w-full flex-column lg:w-1/2">
                <h1 class="text-grey-darkest"> Animation </h1>  
                <hr>
                <button class="bg-green px-2 py-1 rounded text-white hover:bg-green-darker active:bg-green-darkest my-2 outline-none active:outline-none" @click="show = !show">Show Alert</button>
                <transition name="fade">
                    <div class="bg-red" v-if="show"> 
                    Alert - Some info
                    </div>
                </transition>
                <transition name="slide">
                    <div class="bg-red" v-if="show"> 
                    Alert - Some info
                    </div>
                </transition>
                
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data: function () {
        return {
            show: false,
        }
    }
}
</script>

<style> 
.fade-enter {
    opacity: 0;
}

.fade-enter-active {
    transition: all 1s; 
}

.fade-leave {
    
}

.fade-leave-active {
    transition: all 1s;
    opacity: 0;
}

.slide-enter {

}

.slide-enter-active {
    animation: slide-in 1s ease-out forwards;
}

.slide-leave {

}

.slide-leave-active {
    animation: slide-out 1s ease-out forwards;
}

@keyframes slide-in {
    from {
        transform: translateY(20px);
        opacity: 0;
    }

    to {
        transform: translateY(0px);
        opacity:1
    }
}
@keyframes slide-out {
    from {
        transform: translateY(0px);
        opacity: 1;
    }

    to {
        transform: translateY(20px);
        opacity:0;
    }
}
</style>