require "code-assertions"
include CodeAssertions

Dir.glob("**/item.md").each do |file|
    fixed = File.read(file).gsub("http://nuovorinascimento.org", "")
    `mv "#{file}" "#{file}.bak"`
    
    assert { !FileTest.exist?(file) }
    assert { FileTest.exist?(file+ ".bak") }
    
    File.open(file, "w") { |f| f.write fixed }
end
