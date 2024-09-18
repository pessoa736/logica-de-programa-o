
function visualizacao_da_velocida_em_kmh(velocidadeEm_ms)
    -- km = 1000m
    -- h  = 3600
  return (velocidadeEm_ms*1000)/3600
end

local ms = 5

print("sua velocidade em m/s é " .. ms)
print("já sua velocidade em km/h é " .. visualizacao_da_velocida_em_kmh(ms))