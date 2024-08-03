@echo off
cls
:menu
cls

echo.
date /t
echo.
echo Computador: %computername%		Usuario: %username%
echo.
echo NAO ESQUECA DE EXECUTAR ESTA FERRAMENTA COM PRIVILEGIO DE ADMINISTRADOR
echo.
echo  Menu Ferramentas - Senac Botucatu - TI34
echo ==============================================
echo #  1. Esvaziar a Lixeira                     #
echo #  2. Verificar arquivos do sistema          #
echo #  3. Procurar erros no disco (Check Disk)   #
echo #  4. Verificar erros na imagem do Windows   #
echo #  5. Atualizar todos os softwares           #
echo #  6. Gerar lista de softwares instalados    #
echo #  7. Verificar data de instalação (Windows) #
echo #  10. Sair                                  #
echo ==============================================

set /p opcao= Escolha uma opcao: 
echo _______________________________
if %opcao% equ 1 goto opcao1
if %opcao% equ 2 goto opcao2
if %opcao% equ 3 goto opcao3
if %opcao% equ 4 goto opcao4
if %opcao% equ 5 goto opcao5
if %opcao% equ 6 goto opcao6
if %opcao% equ 7 goto opcao7
if %opcao% geq 10 goto opcao10

:opcao1
cls
rd /S /Q c:\$Recycle.bin
echo ===============================
echo #      Lixeira esvaziada      #
echo ===============================
pause
goto menu

:opcao2
cls
sfc /scannow
echo ===============================
echo #    System File Checker      #
echo #   Verificacao Finalizada    #
echo ===============================
pause
goto menu

:opcao3
cls
chkdsk /f /r
echo ===============================
echo #   Verificacao Finalizada    #
echo ===============================
pause
goto menu

:opcao4
cls
DISM.exe /Online /Cleanup-image /Restorehealth
echo ===============================
echo #   Verificacao Finalizada    #
echo ===============================
pause
goto menu

:opcao5
cls
winget upgrade --all
echo ===============================
echo #   Atualizacao Finalizada    #
echo ===============================
pause
goto menu

:opcao6
cls
wmic /output:c:\lista_de_softwares.txt product get name, version
echo ===============================
echo #        Lista Criada         #
echo ===============================
pause
goto menu

:opcao7
cls
systeminfo | find /i "Original"
echo ===============================
echo #      Verifique a data       #
echo ===============================
pause
goto menu

:opcao10
cls
echo Tchau^!^!^!
pause
exit
