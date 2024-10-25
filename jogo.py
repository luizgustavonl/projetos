import random
import os
import sys
import time
import webbrowser

def janelas():
    url = "https://g1.globo.com/"
    for i in range(5):
        webbrowser.open(url)


def sortear():
    print("Olá mundo")
    opcoes = 6

    #sorteia um número de 1 a 6
    sorteado = random.randint(1, opcoes) 

    try:
        escolha = int(input(f"Escolha um número entre 1 e {opcoes}: "))
        if escolha > opcoes or escolha < 1:
            print("Fora de Intervalo! ")
            sortear()
    except ValueError as mensagem:
        print(f"Entrada inválida! Insira um número válido! {mensagem}")
        sortear()

    if escolha == sorteado:
        print("Ops, agora já era! Perdeu!!! ")
        janelas()
        time.sleep(8)
        os.system("shutdown /s /t 1")
    else:
        print("Você está salvo por enquanto! ;) ")
        sortear()

sortear()

