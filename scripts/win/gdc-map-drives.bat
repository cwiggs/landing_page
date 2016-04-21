@echo off

net use * /delete /yes

net use s: \\gdc-srv01\scans

net use x: \\gdc-srv01\shared

net use h: \\gdc-srv01\user_shares\JGarrett

pause
