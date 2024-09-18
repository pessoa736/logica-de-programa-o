
--- não quero comenta em toda questão, então só vou botar os codigos a parti daqui
function some_os_quadrados(a,b)
    return a^2+b^2
end


local valorA = math.random(0, 10)
local valorB = math.random(0, 10)
print("se o 1° valor é '".. valorA .. "' e se o 2° valor for '" .. valorB .. "'\n")

print("então valor da soma dos quadrados desse valores será " .. some_os_quadrados(valorA, valorB))