--Ubepwnd Cannon Slave
--os.pullEvent = os.pullEventRaw --Uncomment to disable CTRL-T
--constants start
fireSlaveCommand = "FITH!" --this is the message sent from the Master to fire slaves, needs to be the same here as on the Master!
modemSide = "top" --the side the modem is on
password = "ubepwnd" --the password to shut it down
debug = "Debug" --the command to activate debug mode and exit the loop.
rsOutput = "back" --which side is the redstone?
--constants end

firstLoop = true
loop = true

--bootUp start
function bootUp()
 rednet.open(modemSide)
end --bootUp end

--Main Loop start
while loop do

   if firstLoop then
     bootUp()
     firstLoop = false
   end
   term.clear()
   term.setCursorPos(1,1)
   print "Ubepwnd Cannon Slave"
   print ""
   term.write("This is Slave #"..os.getComputerID()..)
   print ""
   print "Waiting for rednet_message..."
   sleep(5)
   rnm, senderId, sentCommand, distance = os.pullEvent(rednet_message)
   
   if sentCommand == fireSlaveCommand then
     print ""
     term.write("Fire Command Received! Activating redstone on ")
     term.write(rsOutput)
     term.write(" side!")
     rs.setOutput(rsOutput,true)
     sleep(1)
     rs.setOutput(rsOutput,false)
   else
     print ""
     print "Invalid Command Received!"
   end
   print ""
   --term.write("> ")
   --command = read()
   --if command == "exit" then
   --  loop = false
   --end

end --Main Loop end