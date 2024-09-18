


function media_de_uma_lista(lista)
    -- com esse códigos é possível não só ver a media de 3 valores  como tbm é possível fazer a media com qualquer quantidade de valores que estejam dentro dessa lista "lista de notas"
    local i = 0
    for index, valor in ipairs(lista) do
       i = i + valor
    end
    return ((i/#lista)//0.1)*0.1
  end
  
local lista = {}
for i = 0, math.random(5, 10) do
    lista[i] = math.random(0,10)
end

peso_das_notas = {2, 3, 5}


--13)
aluno = {
  nome = "juninho",
  notas = {math.random(0, 10), math.random(0, 10), math.random(0, 10)}
}

function media_ponderada(lista, p)
  local result = 0
  local somaDosPessos = 0  
  for i = 1, 3 do
    result = result+ lista[i]*p[i]
    somaDosPessos = somaDosPessos + p[i]
  end
  return result/somaDosPessos
end

print("2° questão")
print("\n")

print("a lista 'lista' tem 3 valores, e a media dessa lista é " .. media_de_uma_lista(lista))


print("\n")
print("13° questão")
print("\n")

print(aluno.nome .. " é um aluno pouco dedicado")
print("no primeiro bimestre ele tirou um ".. aluno.notas[1] .. ",")
print("já no segundo bimestre ele tirou um ".. aluno.notas[2])
print("e no terceiro bimestre ele tirou um ".. aluno.notas[3])

mediaDoAluno = media_ponderada(aluno.notas, peso_das_notas)
print("e por isso a  media dele é :" .. mediaDoAluno)
if mediaDoAluno< 7 then
  print("pela falta de compromisso dele, ele foi reprovado")
else
  print("pelo esforço dele, ele passou de ano")
end