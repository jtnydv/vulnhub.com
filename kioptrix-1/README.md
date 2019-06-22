# Kioptrix Level 1
### Resources and explanations


#### namp
Output of the nmap, first 1000 ports, scan for the network.

#### Notes.pdf
Notes I made while solving the machine.

#### 10-rce-samba.c
Samba service exploit. Build instuctions are inside the source file.

#### 21671-mod-ssl.c
OpenSSL 2.8.4 exploit which results in shell as user apache. This can be escalate to root using the ptrace-kmod.c (Build instructions inside)

#### 764-openf-2.c
OpenSSL exploit which results in root shell, though this requires internet else it is same as the exploit above, in combination with pktrace-mod.c exploit.

#### pktrace-mod.c
This exploits race condition in linux kernel to gain root.
