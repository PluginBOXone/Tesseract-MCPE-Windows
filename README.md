# Tesseract x86(32-bit) Windows Launcher
PHP 7-based Tesseract launcher (for Win x86)\

##This is repo needed for [this](https://github.com/TesseractTeam/Tesseract/wiki/Installation-on-Windows) page   <br>Please do NOT modyfy. This Is an Extra Repositry.

You will need Visual Studio C++ Redistributable 2015 installed.

This launcher must be need vcredist x86 (or x86)
before you launch the program, please setup vcredist [here](https://www.microsoft.com/en-us/download/details.aspx?id=48145).

You can download of the 'Download ZIP'
We have added some essential plugins for your convienience

If you seen the error below, you must install right vcredist.
----------------------------------
'/usr/bin/php/php.exe: error while loading shared libraries: VCRUNTIME140.dll: cannot open shared object file: No such file or dire ctory bin\php\php.exe: Exit 127'

(It means you have installed the x86 version, therefore you need the x64 version or if you have installed the x64 version, you need the x86 version)

Launcher version
----------------------------------
- PHP 7.0.9 official binary for x86 systems
- Pthreads 3.1.6
- Tesseract start scripts
