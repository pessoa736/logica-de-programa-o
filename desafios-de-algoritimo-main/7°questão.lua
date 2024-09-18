
function imc(peso, altura)
    local casaDecimais = (10)^-2
    return ((peso / (altura * altura))//casaDecimais)*casaDecimais
end

local peso = 65 --kg
local altura = 1.86 --m 

print("Davi  tem ".. peso.. "kg")
print("e tem " .. altura .. "m \n")
print("e por isso seu IMC (seu Indice de Massa Corporal) é " .. imc(peso, altura))
