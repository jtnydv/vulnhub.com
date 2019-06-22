#!/bin/bash
# The devs refuse to create an in-house security app until they get their back-pay
# ...they've always been entitled nerds...I'll just create one myself!
echo "--------------------"
netstat -antp |grep sh
echo "--------------------"
w
echo "--------------------"
ps -aux |grep -v grep |grep bash
echo "--------------------"
ps -ef | grep -v grep |grep bash

# Adding more in teh future....
