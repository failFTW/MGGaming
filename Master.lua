--Ubepwnd Cannon Master v1.0
--os.pullEvent = os.pullEventRaw --Uncomment to disable CTRL-T
--constants start
fireSlaveCommand = "FITH!" --this is the message sent to the slaves to fire them, needs to be the same here as on the slaves!
modemSide = "top" --the side the modem is on
password = "ubepwnd" --the password for the fire command.
password2 = "password" --secondary password, unused for now.
fireCommand = "Fire" --the fire command NOTE: case sensitive!
fireAll = "all" --the command to fire all currently active Slaves.
debug = "Debug" --the command to activate debug mode and exit the loop.
exitCommand = "Exit" --This is the command to exit the loop.

--constants end


firstLoop = true
loop = true
debuged = false

function bootUp()
  rednet.open(modemSide)
  term.write("Password: ")
  pass = read("*")
  --password if start
  if pass == password then
    print ""
    textutils.slowPrint("Password Accepted!")
    sleep(1)
    print ""
   --password elseif debug
  elseif pass == debug then
    print ""
    textutils.slowPrint("Debug Activated. Bypassing Loop.........")
    sleep(2)
    loop = false
    debuged = true
     --password elseif debug end
  --password else
  else
    print ""
    textutils.slowPrint("INCORRECT PASSWORD!! D:<")
    sleep(1)
    loop = false
    os.shutdown()
  end --password if end
  
end



--Main Loop

while loop do

  if firstLoop then
   bootUp()
   firstLoop = false
  end
  if debuged then
    break
  end
  term.clear()
  term.setCursorPos(1,1)
  term.write("Enter Command: ")
  command = read()
  --command if start
  if command == fireCommand then
    print ""
      term.write("Fire Which Unit?: ")
      unit = read()
      --unit if start
      if unit == fireAll then
        print ""
        term.write("Really fire ALL active Units? (y/n): ")
        allYN = read()
        --fire all confirm if start
        if allYN == "y" then
          print ""
          textutils.slowPrint("Firing ALL active Units!!")
          sleep(1)
          rednet.broadcast(fireSlaveCommand)
          sleep(.5)
          print "All Units Fired. Exiting...."
          sleep(1)
        --fire all confirm else
        else
          print ""
          textutils.slowPrint("Firing Aborted! Exiting...")
          sleep(1)
        end --fire all confirm if end
      --unit else
      else
        print ""
        term.write("Really Fire Unit #"..unit.."? (y/n): ")
        unitYN = read()
        --fire unit confirm if start
        if unitYN == "y" then
          print ""
          term.write("Firing Unit #"..unit.."!")
          sleep(.5)
          rednet.send(pwn.sTn(unit),fireSlaveCommand)
          sleep(.5)
          print ""
          print "Unit Fired. Exiting..."
        --fire unit confirm else
        else
          print ""
          textutils.slowPrint("Firing Aborted! Exiting...")
          sleep(1)
        end --fire unit confirm if end
    end
  --command elseif debug
  elseif command == debug then
    print ""
    textutils.slowPrint("Debug Activated. Exiting Loop.........")
    sleep(2)
    loop = false
    break --password elseif debug end
  
  elseif command == exitCommand then
    print ""
    textutils.slowPrint("Exiting......")
    sleep(2)
    break
  else
    print ""
    textutils.slowPrint("ERROR!! Unrecognized Command!!")
    sleep(2)
    print ""
    term.write("Available Commands: ")
    sleep(1)
    term.write("Fire")
    sleep(1)
    print ""
    print "More Commands to come!"
    sleep(3)
  end --command if end

end --Main Loop end

print ""
textutils.slowPrint("Goodbye.")
sleep(1)
term.clear()
term.setCursorPos(1,1)
rednet.close(modemSide)