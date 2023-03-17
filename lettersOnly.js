function lettersOnly(input){
    var regex = /[^a-z\s]/gi  ;
    input.value = input.value.replace(regex, "");
}
