pragma solidity >=0.8.0 <0.9.0;
//SPDX-License-Identifier: MIT


contract Journey {


  address public EMPLOYER = 0x65DB3fFCf5F4Da01095302b5418A6F12173658F2;

  address public EMPLOYEE = 0x65DB3fFCf5F4Da01095302b5418A6F12173658F2;

  struct Record {
        address jwho;
        uint jmiles;
        string jdescribe;
        uint256 jdate;
    }

  address public CTRACT = address(this);

  string public dataJourney = "Enter Journey Details";

  uint public miles = 0;

    Record[] public records;

    function setJourney(string memory _jwho, uint _jmiles, string _jdescribe, uint256 _jdate) public {
        // initialize an empty struct and then update it
        Record memory record;
        record.jwho = _jwho;
        record.jmiles = _jmiles;
        record.jdescribe = jdescribe;
        record.jdate = _jdate;
        records.push(record);
    }

    constructor() {
    // what should we do on deploy?
    }

    receive() external payable {
      //this should calculate the total balance in the miles and pay when it receives money after clearing the balance
    }

  function SetJourney(string memory newJourney) public {

    //we need to set up a rolling record count and a date and a info field along with number of miles

  }  

}

