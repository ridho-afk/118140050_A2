import {plus,min} from './tipe'

export const plusCounter = (counter) => ({
    type:plus,
    data:counter
 
})

export const minCounter = (counter2) => ({
    type:min,
    data:counter2
})