
function Porcentagem(valor, porcentagem)
  return valor*(porcentagem/100)
end

--3)

print("3° questão")

print("\n")
local valor = math.random(0, 255)
print("15% de " .. valor .. " é " .. Porcentagem(valor, 15))

-- 4)
print("\n")
print("4° questão")
print("\n")

local valor = math.random(0, 255)
print("5% de " .. valor .. " é " .. Porcentagem(valor, 5))
print("já 50% de " .. valor .. " é " .. Porcentagem(valor, 50))

-- 8)
print("\n")
print("8° questão")
print("\n")

local valor = (math.random(0, 200)//10)*10
print("valor de " .. valor .. " com desconto de 9% é " .. valor-Porcentagem(valor, 9))

-- 9)
print("\n")
print("9° questão")
print("\n")

local valor = (math.random(0, 200)//10)*10
local desconto = Porcentagem(valor, 7)
local valorComDesconto = valor-desconto
print("valor é " .. valor .. " que tem um desconto de 7% que seria " .. desconto)
print("o valor com o desconto seria " .. valorComDesconto)

