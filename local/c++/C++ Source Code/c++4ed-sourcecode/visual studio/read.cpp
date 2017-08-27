//=============================================
// C++ Programming in easy steps 4ed. [5:84]
//=============================================

// #include <string>
#include <fstream>
#include <iostream>
using namespace std ;

int main()
{
  char letter ;
  int i ;
  // string line ;

  ifstream reader( "poem.txt" ) ;

  if( ! reader )
  {
    cout << "Error opening input file" << endl ;
    return -1 ;
  }
  else
  for( i = 0; ! reader.eof() ; i++ )
  {
    reader.get( letter ) ;
    cout << letter ;

    // getline( reader , line ) ;
    // cout << line << endl ;
  }

  reader.close() ;
  
  cout << "Iterations: " << i << endl ;
  system("PAUSE");
  return 0 ;
}